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
        $examens = Examen::where('etat', '=', 'null')->orderBy('created_at', 'desc')->get();
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

    public function examen_fait(){
        $examens = Examen::where('etat', '!=', 'null')->get();
        foreach($examens as $examen){
            $patient = Patient::find($examen->patient_id);
            $examen['nom'] = $patient->nom;
            $examen['postnom'] = $patient->postnom;
            $examen['prenom'] = $patient->prenom;
            $examen['sexe'] = $patient->sexe;
            $examen['age'] = $patient->age;
        }
        return view('laboratain.examen-fait', compact('examens'));
    }

    public function patient_positif(){
        $examens = Examen::where('etat', '=', 'positif')->get();
        foreach($examens as $examen){
            $patient = Patient::find($examen->patient_id);
            $examen['nom'] = $patient->nom;
            $examen['postnom'] = $patient->postnom;
            $examen['prenom'] = $patient->prenom;
            $examen['sexe'] = $patient->sexe;
            $examen['age'] = $patient->age;
        }

        return view('laboratain.patient-positif', compact('examens'));
    }

    public function patient_negatif(){
        $examens = Examen::where('etat', '=', 'negatif')->get();
        foreach($examens as $examen){
            $patient = Patient::find($examen->patient_id);
            $examen['nom'] = $patient->nom;
            $examen['postnom'] = $patient->postnom;
            $examen['prenom'] = $patient->prenom;
            $examen['sexe'] = $patient->sexe;
            $examen['age'] = $patient->age;
        }

        
        return view('laboratain.patient-negatif', compact('examens'));
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
        Examen::where('patient_id',$request->patient_id)
            ->update(['etat' => $request->symptomes]);
        return redirect()->route('laboratain.examiner', $request->patient_id)->with(['success' => 'Patient examine']);
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
