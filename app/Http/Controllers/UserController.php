<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id = 'user not found'){
        echo $id;
    }
    public function reg(){
        return view('reg');
    }
    public function done(){
        echo 'uspeh';
    }
}
