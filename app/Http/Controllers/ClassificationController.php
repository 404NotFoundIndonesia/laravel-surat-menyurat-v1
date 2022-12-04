<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassificationRequest;
use App\Http\Requests\UpdateClassificationRequest;
use App\Models\Classification;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('pages.reference.classification');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClassificationRequest $request
     * @return RedirectResponse
     */
    public function store(StoreClassificationRequest $request): RedirectResponse
    {
        return redirect()->route('reference.classification.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClassificationRequest $request
     * @param Classification $classification
     * @return RedirectResponse
     */
    public function update(UpdateClassificationRequest $request, Classification $classification): \Illuminate\Http\RedirectResponse
    {
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Classification $classification
     * @return RedirectResponse
     */
    public function destroy(Classification $classification): \Illuminate\Http\RedirectResponse
    {
        return back();
    }
}
