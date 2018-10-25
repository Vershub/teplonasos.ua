<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlacesCreateController extends Controller
{
    public function index(Request $request) {
        $places = new Place;
        $places->name = $request->name;
        $places->type = $request->type;
        $places->description = $request->description;
        $places->save();

        $request->file('image')->store('images', 'public');

        return redirect('/places');
    }
}
