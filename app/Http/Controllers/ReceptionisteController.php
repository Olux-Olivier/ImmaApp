<?php

namespace App\Http\Controllers;

use App\Models\Receptioniste;
use Illuminate\Http\Request;

class ReceptionisteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('receptionniste.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Receptioniste $receptioniste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receptioniste $receptioniste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receptioniste $receptioniste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receptioniste $receptioniste)
    {
        //
    }
}
