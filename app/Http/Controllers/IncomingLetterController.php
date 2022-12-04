<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLetterRequest;
use App\Http\Requests\UpdateLetterRequest;
use App\Models\Letter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class IncomingLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.transaction.incoming.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('pages.transaction.incoming.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLetterRequest $request
     * @return RedirectResponse
     */
    public function store(StoreLetterRequest $request): RedirectResponse
    {
        return redirect()->route('transaction.incoming.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Letter $letter
     * @return View
     */
    public function show(Letter $letter): View
    {
        return view('pages.transaction.incoming.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Letter $letter
     * @return View
     */
    public function edit(Letter $letter): View
    {
        return view('pages.transaction.incoming.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLetterRequest $request
     * @param Letter $letter
     * @return RedirectResponse
     */
    public function update(UpdateLetterRequest $request, Letter $letter): RedirectResponse
    {
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Letter $letter
     * @return RedirectResponse
     */
    public function destroy(Letter $letter): RedirectResponse
    {
        return back();
    }
}
