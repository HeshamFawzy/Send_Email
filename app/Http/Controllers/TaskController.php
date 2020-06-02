<?php

namespace App\Http\Controllers;

use App\Mail\TaskCompleted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    public function send(Request $request)
    {
        Mail::to($request->input('email'))->send(new TaskCompleted($request));

        return redirect()->back();
    }
}
