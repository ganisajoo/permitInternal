<?php

namespace App\Http\Controllers;

use App\Permit;
use Illuminate\Http\Request;

class PermitController extends Controller
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

        $permit = new Permit;
        $permit->nama_permit = $request->nama_permit;
        $permit->purpose_work = $request->purpose_work;
        $permit->time_access = $request->time_access;
        $permit->area_entry = json_encode($request->area_entry);
        $permit->working_procedure = $request->working_procedure;
        $permit->testing_verification = $request->testing_verification;
        $permit->rollback_operation = $request->rollback_operation;

        $permit->save();

        
        // Permit::create([
        // 'nama_permit'           => $request->nama,
        // 'purpose_work'          => $request->purpose_work,
        // 'time_acces'            => $request->time_acess,
        // 'area_entry'            => $request->area_entry,      
        // 'working_procedure'     => $request->working_procedure,
        // 'testing_verification'  => $request->testing_verification,
        // 'rollback_operation'    => $request->rollback_operation,
        // ]);
     
        // Permit::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function show(Permit $permit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function edit(Permit $permit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permit $permit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permit $permit)
    {
        //
    }
}
