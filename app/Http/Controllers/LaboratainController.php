<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Laboratain;
use App\Models\Patient;
use Illuminate\Http\Request;

class LaboratainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultations = Consultation::orderBy('created_at', 'desc')->get();
        foreach ($consultations as $consultation) {
            $patient = Patient::find($consultation->patient_id);
            $consultation['nom'] = $patient->nom;
            $consultation['postnom'] = $patient->postnom;
            $consultation['prenom'] = $patient->prenom;
        }
        return view('laboratain.index', compact('consultations'));
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
    public function show(Laboratain $laboratain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laboratain $laboratain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laboratain $laboratain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laboratain $laboratain)
    {
        //
    }
}
