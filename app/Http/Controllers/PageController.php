<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request): View
    {
        return view('pages.dashboard');
    }

    public function profile(Request $request): View
    {
        return view('pages.profile');
    }

    public function settings(Request $request): View
    {
        return view('pages.setting');
    }
}
