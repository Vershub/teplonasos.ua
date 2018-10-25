<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacesFormController extends Controller
{
    public function index () {
        return view('Create_pleces');
    }
}
