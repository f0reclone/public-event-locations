<?php

namespace Tests\Feature;

use App\Models\Place;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Inertia\Testing\AssertableInertia;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Enums\Srid;
use Illuminate\Support\Facades\DB;

class PlaceControllerSearchTest extends TestCase
{
    use RefreshDatabase;

    public function test_search_with_valid_input()
    {
        // Given
        $latitude = 40.7128;
        $longitude = -74.0060;
        $radius = 40000;
        $point = new Point($latitude, $longitude, Srid::WGS84);

        // Create 3 Place records within the radius
        $places = Place::factory()->count(3)->create([
            'coordinates' => $point
        ]);

        $requestData = [
            'latitude' => $latitude,
            'longitude' => $longitude,
        ];


        // When
        $response = $this->getJson(route('places.search', $requestData));

        // Then
        $response->assertStatus(200);
        $response->assertInertia(
            fn (AssertableInertia $page) => $page
                ->component('Search')
                ->has('places', 3) // Ensuring it received 3 places
        );
    }

    public function test_search_with_points_inside_and_outside_radius()
    {
        // Given
        $latitude = 40.7128;
        $longitude = -74.0060;
        $radius = 40000;
        $pointWithinRange = new Point($latitude, $longitude, Srid::WGS84);
        $pointOutsideRange = new Point(41.7128, -75.0060, Srid::WGS84); // Some location outside the 40,000-meter radius

        // Create 1 Place record within the radius
        $placeWithinRange = Place::factory()->create([
            'coordinates' => $pointWithinRange
        ]);

        // Create 1 Place record outside the radius
        $placeOutsideRange = Place::factory()->create([
            'coordinates' => $pointOutsideRange
        ]);

        $requestData = [
            'latitude' => 40.683,
            'longitude' => -74.132,
        ];

        $expectedDistance = 11127; // Pre-calculated distance in meters

        // When
        $response = $this->getJson(route('places.search', $requestData));

        // Then
        $response->assertStatus(200);
        $response->assertInertia(
            fn (AssertableInertia $page) => $page
                ->component('Search')
                ->where('places', function ($places) use ($placeWithinRange, $placeOutsideRange, $expectedDistance) {
                    // Check that only the place within the range is included and the distance is correct
                    return $places->contains(
                        fn ($place) =>
                        $place['id'] === $placeWithinRange->id &&
                            (int) $place['distance'] == $expectedDistance
                    ) && !$places->contains('id', $placeOutsideRange->id);
                })
                ->has('places', 1) // Ensuring it received only 1 place within the range
        );
    }

    public function test_search_with_no_results()
    {
        // Given
        $latitude = 0;
        $longitude = 0;

        // Ensuring no places within the radius
        $places = Place::factory()->count(3)->create([
            'coordinates' => DB::raw("ST_GeomFromText('POINT(-89 -89)', 4326)") // Far enough not to be within the radius
        ]);

        $requestData = [
            'latitude' => $latitude,
            'longitude' => $longitude,
        ];

        // When
        $response = $this->getJson(route('places.search', $requestData));

        // Then
        $response->assertStatus(200);
        $response->assertInertia(
            fn (AssertableInertia $page) => $page
                ->component('Search')
                ->has('places', 0)
        );
    }

    public function test_search_with_invalid_coordinates()
    {
        // Given
        $requestData = [
            'latitude' => 'invalid_lat',
            'longitude' => 'invalid_long',
        ];

        // When
        $response = $this->getJson(route('places.search'), $requestData);

        // Then
        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['latitude', 'longitude']);
    }
}
