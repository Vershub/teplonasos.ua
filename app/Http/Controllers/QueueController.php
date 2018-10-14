<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;


class QueueController extends Controller
{
    public function index () {

        $logs = Log::where('status', '=', 0)
            ->orderBy('added_on', 'DESC')
            ->get();

        return view('queue')->with(compact('logs'));
    }

    public function accept(Request $request) {


        Log::where('status', '=', 0)
            ->where('task_id', $request->id)
            ->limit(1)
            ->update(['status' => 1]);



        return redirect('tasks');
    }
}
