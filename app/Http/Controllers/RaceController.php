<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index(Request $request)
    {
        $query = Race::query();

        // Filter nach Saison
        if ($request->filled('season')) {
            $query->where('season', $request->season);
        }

        // Filter nach Rennnamen
        if ($request->filled('raceName')) {
            $query->where('raceName', 'like', '%' . $request->raceName . '%');
        }

        // Filter nach Datum
        if ($request->filled('date')) {
            $query->where('date', $request->date);
        }

        $races = $query->get();

        return view('index', compact('races'));
    }
}