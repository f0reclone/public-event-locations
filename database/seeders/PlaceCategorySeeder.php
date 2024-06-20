<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\PlaceCategory;
use Illuminate\Database\Seeder;

class PlaceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            
            [
                'name' => 'Grillhütte',
                'description' => 'Ein gemütlicher Ort zum Grillen und für gesellige Zusammenkünfte.',
                'image_id' => Image::query()->create([
                    'path' => 'images/place-categories/grillhuette.jpg',
                    'description' => 'Grillhütte Bild',
                ])->id,
            ],
            [
                'name' => 'Dorfgemeinschaftshaus',
                'description' => 'Gemeinschaftshaus für Aktivitäten im Dorf.',
                'image_id' => Image::query()->create([
                    'path' => 'images/place-categories/dorfgemeinschaftshaus.jpg',
                    'description' => 'Dorfgemeinschaftshaus Bild',
                ])->id,
            ],
            [
                'name' => 'Sportplatz',
                'description' => 'Sportplatz für verschiedene Aktivitäten.',
                'image_id' => Image::query()->create([
                    'path' => 'images/place-categories/sportplatz.jpg',
                    'description' => 'Sportplatz Bild',
                ])->id,
            ],
            [
                'name' => 'Freizeitanlage',
                'description' => 'Freizeitanlage für Spaß und Erholung.',
                'image_id' => Image::query()->create([
                    'path' => 'images/place-categories/freizeitanlage.jpg',
                    'description' => 'Freizeitanlage Bild',
                ])->id,
            ],
            [
                'name' => 'Zeltplatz',
                'description' => 'Campingplatz für Outdoor-Enthusiasten.',
                'image_id' => Image::query()->create([
                    'path' => 'images/place-categories/zeltplatz.jpg',
                    'description' => 'Zeltplatz Bild',
                ])->id,
            ],
        ];

        foreach ($categories as $category) {
            PlaceCategory::create($category);
        }
    }
}
