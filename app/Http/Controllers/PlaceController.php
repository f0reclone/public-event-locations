<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPlaceRequest;
use App\Http\Requests\StorePlaceRequest;
use App\Http\Requests\UpdatePlaceRequest;
use App\Http\Resources\PlaceCollection;
use App\Http\Resources\PlaceResource;
use App\Models\Place;
use Illuminate\Support\Facades\DB;
use MatanYadaev\EloquentSpatial\Enums\Srid;
use MatanYadaev\EloquentSpatial\Objects\Point;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlaceRequest $request)
    {
        //
    }

    public function search(SearchPlaceRequest $request)
    {
        $data = $request->validated();
        $latitude = $data['latitude']; // Latitude
        $longitude = $data['longitude']; // Longitude

        $point = new Point($latitude, $longitude, Srid::WGS84);

        $radius = 40000; // Default radius in kilometers

        // Perform the geolocation search
        $places = Place::query()
            ->whereDistanceSphere('coordinates', $point, '<', $radius)
            ->withDistanceSphere('coordinates', $point)
            ->get();

        return inertia('Search', [
            'places' => PlaceCollection::make($places),

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {




        return inertia('Place.vue', [
            'place' => PlaceResource::make($place)->toArray(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlaceRequest $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
