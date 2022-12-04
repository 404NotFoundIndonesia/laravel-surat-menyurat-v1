<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LetterGalleryController extends Controller
{
    public function incoming(Request $request): View
    {
        return view('pages.gallery.incoming');
    }
}
