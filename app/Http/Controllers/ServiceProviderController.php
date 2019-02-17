<?php

namespace App\Http\Controllers;

use App\service_provider;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.service_provider');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service_provider  $service_provider
     * @return \Illuminate\Http\Response
     */
    public function show(service_provider $service_provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service_provider  $service_provider
     * @return \Illuminate\Http\Response
     */
    public function edit(service_provider $service_provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service_provider  $service_provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service_provider $service_provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service_provider  $service_provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(service_provider $service_provider)
    {
        //
    }
}
