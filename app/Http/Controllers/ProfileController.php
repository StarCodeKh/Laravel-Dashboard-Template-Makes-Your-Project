<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function profileSettings()
    {
        return view('pages.settings');
    }

    public function faqs()
    {
        return view('pages.faqs');
    }
}
