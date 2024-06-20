<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Place;
use App\Models\PlaceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Place::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'place_category_id' => PlaceCategory::factory(), // Assumes you have a Category Factory
            'coordinates' => $this->faker->latitude . ',' . $this->faker->longitude,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
