<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CountersController extends Controller
{
    public function index(Request $request) {

        DB::table('tasks')->where('id', $request->id)->increment('counter', 1);

        return redirect('tasks');

    }
}