<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.home');
    }

    public function analytics()
    {
        return view('dashboard.analytics');
    }

    public function crm()
    {
        return view('dashboard.crm');
    }

    public function crypto()
    {
        return view('dashboard.crypto');
    }

    public function projects()
    {
        return view('dashboard.projects');
    }

    public function nft()
    {
        return view('dashboard.nft');
    }

    public function job()
    {
        return view('dashboard.job');
    }  
    
    public function blog()
    {
        return view('dashboard.blog');
    }
}
