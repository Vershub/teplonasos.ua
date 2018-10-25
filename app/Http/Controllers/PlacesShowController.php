<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlacesShowController extends Controller
{
    public function index(Request $request) {
        $place = Place::find($request->id);

        return view('show', compact('place'));
    }
}
