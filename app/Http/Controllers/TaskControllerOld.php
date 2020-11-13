<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function new()
    {
        Task::insert();
        Log::debug('here');
        return redirect('/');
    }

    public function edit()
    {

    }

    public function completed()
    {

    }

    public function delete()
    {

    }
}
