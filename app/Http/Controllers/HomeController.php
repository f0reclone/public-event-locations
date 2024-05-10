<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\PlaceCategory;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return inertia('Home', [
            'placeCategories' => PlaceCategory::all(),
        ]);
    }
}
