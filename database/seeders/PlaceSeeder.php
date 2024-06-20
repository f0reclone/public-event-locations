<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\CustomPlaceAttribute;
use App\Models\Image;
use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::factory(10)->create()->each(function ($place) {
            $attributes = Attribute::factory(3)->create();
            $place->attributes()->attach($attributes);

            $customPlaceAttributes = CustomPlaceAttribute::factory(3)->create(['place_id' => $place->id]);
            $place->customPlaceAttributes()->saveMany($customPlaceAttributes);

            $images = Image::factory(3)->create();
            $place->images()->attach($images);

            $users = User::factory(3)->create();
            $place->users()->attach($users->pluck('id')->toArray(), ['role' => 'viewer']);
        });
    }
}
