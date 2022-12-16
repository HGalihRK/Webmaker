<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageImageRequest;
use App\Http\Requests\UpdatePageImageRequest;
use App\Models\PageImage;

class PageImageController extends Controller
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
     * @param  \App\Http\Requests\StorePageImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function show(PageImage $pageImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function edit(PageImage $pageImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageImageRequest  $request
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageImageRequest $request, PageImage $pageImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageImage $pageImage)
    {
        //
    }
}
