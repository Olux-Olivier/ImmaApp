<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Examen;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Prescription;
use App\Models\Signe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $signes = Signe::orderBy('created_at', 'desc')->get();

        foreach ($signes as $signe) {
            $patient = Patient::find($signe->patient_id);
            $consulation = Consultation::where('patient_id', $signe->patient_id)->get();
            $prescription = Prescription::where('patient_id',$signe->patient_id)->get();
            $examen = Examen::where('patient_id',$signe->patient_id)->get();



            $signe['nom'] = $patient->nom;
            $signe['postnom'] = $patient->postnom;
            $signe['prenom'] = $patient->prenom;

            if ($consulation->isEmpty()) {
                $signe['consulation'] = false;
            }else{
                $signe['consulation'] = true;
            }

            if ($prescription->isEmpty()) {
               $signe['prescription'] = false;
            }else{
                $signe['prescription'] = true;
            }
            if ($examen->isEmpty()) {
                $signe['examen'] = false;
            }else{
                $signe['examen'] = true;
            }

        }

        return view('medecin.index', compact('signes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function consultation($id){

        return view('medecin.consultation', compact('id'));
    }

    public function store_consultation(Request $request){
        Consultation::create([
            'patient_id' => $request->patient_id,
            "fievre" => $request->fievre,
            "fatigue" => $request->fatigue,
            "mauxTete" => $request->mauxTete,
            "toux" => $request->toux,
            "frissons" => $request->frissons,
            "diarrhee" => $request->diarrhee,
            "user_id" => Auth::user()->id,
        ]);
        return redirect()->route('medecin.index')->with(['success' => 'Consultation reussie']);
    }

    public function demandeExamen($id)
    {
        Examen::create([
            'patient_id' => $id,
            'etat' => false,
            'user_id' => Auth::user()->id,
        ]);


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
    public function show(Medecin $medecin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medecin $medecin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medecin $medecin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medecin $medecin)
    {
        //
    }
}
