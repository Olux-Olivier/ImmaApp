<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Examen;
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
        $examens = Examen::orderBy('created_at', 'desc')->get();


        foreach ($examens as $examen) {
            $patient = Patient::find($examen->patient_id);
            $consultation = Consultation::where('patient_id', $examen->patient_id)->first();
            $examen['nom'] = $patient->nom;
            $examen['postnom'] = $patient->postnom;
            $examen['prenom'] = $patient->prenom;
            $examen['fievre'] = $consultation->fievre ;
            $examen['fatigue'] = $consultation->fatigue;
            $examen['mauxTeste'] = $consultation->mauxTete;
            $examen['toux'] = $consultation->toux ;
            $examen['frissons'] = $consultation->frissons;
            $examen['diarrhee'] = $consultation->diarrhee;
        }
        return view('laboratain.index', compact('examens'));
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
