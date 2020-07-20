<?php

namespace App\Http\Controllers;

use App\Requestor;
use Illuminate\Http\Request;

class RequestorController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Requestor::create($request->all());
        return redirect('/createPermit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requestor  $requestor
     * @return \Illuminate\Http\Response
     */
    public function show(Requestor $requestor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requestor  $requestor
     * @return \Illuminate\Http\Response
     */
    public function edit(Requestor $requestor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requestor  $requestor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requestor $requestor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requestor  $requestor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requestor $requestor)
    {
        //
    }
}
