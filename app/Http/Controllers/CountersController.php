<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Log;
use App\Task;


class CountersController extends Controller
{
    public function index(Request $request) {


        Task::find($request->id)
            ->increment('counter', 1);


        Log::insert([
            'task_id' => $request->id,
            'status' => 0]);

        return redirect('tasks');

    }
}
