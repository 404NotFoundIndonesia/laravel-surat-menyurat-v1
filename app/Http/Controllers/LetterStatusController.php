<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLetterStatusRequest;
use App\Http\Requests\UpdateLetterStatusRequest;
use App\Models\LetterStatus;

class LetterStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLetterStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLetterStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LetterStatus  $letterStatus
     * @return \Illuminate\Http\Response
     */
    public function show(LetterStatus $letterStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LetterStatus  $letterStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(LetterStatus $letterStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLetterStatusRequest  $request
     * @param  \App\Models\LetterStatus  $letterStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLetterStatusRequest $request, LetterStatus $letterStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LetterStatus  $letterStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterStatus $letterStatus)
    {
        //
    }
}
