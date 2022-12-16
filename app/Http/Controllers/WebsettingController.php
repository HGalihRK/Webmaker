<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebsettingRequest;
use App\Http\Requests\UpdateWebsettingRequest;
use App\Models\Websetting;

class WebsettingController extends Controller
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
     * @param  \App\Http\Requests\StoreWebsettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebsettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function show(Websetting $websetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Websetting $websetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebsettingRequest  $request
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebsettingRequest $request, Websetting $websetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Websetting $websetting)
    {
        //
    }
}
