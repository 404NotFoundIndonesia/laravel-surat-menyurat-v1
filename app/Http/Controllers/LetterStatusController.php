<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLetterStatusRequest;
use App\Http\Requests\UpdateLetterStatusRequest;
use App\Models\LetterStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LetterStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('pages.reference.status', [
            'data' => LetterStatus::render($request->search),
            'search' => $request->search,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLetterStatusRequest $request
     * @return RedirectResponse
     */
    public function store(StoreLetterStatusRequest $request): RedirectResponse
    {
        try {
            LetterStatus::create($request->validated());
            return back()->with('success', __('menu.general.success'));
        } catch (\Throwable $exception) {
            return back()->with('error', $exception->getMessage());
        }
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
        try {
            $status->update($request->validated());
            return back()->with('success', __('menu.general.success'));
        } catch (\Throwable $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param LetterStatus $status
     * @return RedirectResponse
     */
    public function destroy(LetterStatus $status): RedirectResponse
    {
        try {
            $status->delete();
            return back()->with('success', __('menu.general.success'));
        } catch (\Throwable $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
