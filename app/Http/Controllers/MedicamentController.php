<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicament.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Medicament::create(['nom' => $request->medicament]);

        return redirect()->route('medicament.create')->with(['success' => 'Medicament ajoute avce succes !']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicament $medicament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicament $medicament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicament $medicament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicament $medicament)
    {
        //
    }
}
