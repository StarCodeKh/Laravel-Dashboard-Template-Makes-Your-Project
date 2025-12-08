<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tasksListView()
    {
        return view('apps.tasks-list-view');
    }

    public function tasksKanban()
    {
        return view('apps.tasks-kanban');
    }

    public function tasksDetails()
    {
        return view('apps.tasks-details');
    }
}
