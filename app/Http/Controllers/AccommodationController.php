<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Services\AccommodationSearchService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AccommodationController extends Controller
{
    public function index(Request $request, AccommodationSearchService $accommodationService)
    {
        $filters = $request->only($accommodationService->params());
        $accommodations = $accommodationService->search($filters);

        return Inertia::render('Accommodation/Index', [
            'accommodations' => $accommodations
        ]);
    }

    public function show(Request $request, Accommodation $accommodation)
    {
        return Inertia::render('Accommodation/Show', [
            'accommodation' => $accommodation
        ]);
    }
}
