<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDispositionRequest;
use App\Http\Requests\UpdateDispositionRequest;
use App\Models\Disposition;
use App\Models\Letter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;

class DispositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param int $letter
     * @return View
     */
    public function index(Request $request, int $letter): View
    {
        return view('pages.transaction.disposition.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param int $letter
     * @return View
     */
    public function create(int $letter): View
    {
        return view('pages.transaction.disposition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param int $letter
     * @param StoreDispositionRequest $request
     * @return RedirectResponse
     */
    public function store(StoreDispositionRequest $request, int $letter): RedirectResponse
    {
        return redirect()->route('transaction.disposition.index', 1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $letter
     * @param Disposition $disposition
     * @return View
     */
    public function edit(int $letter, Disposition $disposition): View
    {
        return view('pages.transaction.disposition.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDispositionRequest $request
     * @param int $letter
     * @param Disposition $disposition
     * @return RedirectResponse
     */
    public function update(UpdateDispositionRequest $request, int $letter, Disposition $disposition): RedirectResponse
    {
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $letter
     * @param Disposition $disposition
     * @return RedirectResponse
     */
    public function destroy(int $letter, Disposition $disposition): RedirectResponse
    {
        return back();
    }
}
