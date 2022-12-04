<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLetterStatusRequest;
use App\Http\Requests\UpdateLetterStatusRequest;
use App\Models\LetterStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class LetterStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('pages.reference.status');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLetterStatusRequest $request
     * @return RedirectResponse
     */
    public function store(StoreLetterStatusRequest $request): RedirectResponse
    {
        return redirect()->route('reference.status.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLetterStatusRequest $request
     * @param LetterStatus $status
     * @return RedirectResponse
     */
    public function update(UpdateLetterStatusRequest $request, LetterStatus $status): RedirectResponse
    {
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param LetterStatus $status
     * @return RedirectResponse
     */
    public function destroy(LetterStatus $status): RedirectResponse
    {
        return back();
    }
}
