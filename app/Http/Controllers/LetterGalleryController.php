<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LetterGalleryController extends Controller
{
    public function incoming(Request $request): View
    {
        return view('pages.gallery.incoming', [
            'data' => Attachment::incoming()->render($request->search),
            'search' => $request->search,
        ]);
    }

    public function outgoing(Request $request): View
    {
        return view('pages.gallery.outgoing', [
            'data' => Attachment::outgoing()->render($request->search),
            'search' => $request->search,
        ]);
    }
}
