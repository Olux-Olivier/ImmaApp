<?php

namespace App\Http\Controllers;

use App\Models\Infirmier;
use App\Models\Patient;
use App\Models\Signe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfirmierController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function prelevement_attente(Request $request){

        $patientsAvecSignes = Signe::pluck('patient_id')->toArray(); // Récupérer les IDs des patients avec des signes
        $patients = Patient::whereNotIn('id', $patientsAvecSignes)->get();    
        
        
        // $signes = Patient::all();
/*
        foreach($signes  as $signe){
           
            $patient = Patient::find($signe->patient_id);
            $signe['nom'] = $patient->nom;
            $signe['postnom'] = $patient->postnom;
            $signe['prenom'] = $patient->prenom;
            $signe['profession'] = $patient->profession;
            $signe['date_naissance'] = $patient->date_naissance;
            $signe['nationalite'] = $patient->nationalite;
            $signe['age'] = $patient->age;
            $signe['etat_civil'] = $patient->etat_civil;
            $signe['sexe'] = $patient->sexe;
            $signe['num_partenaire'] = $patient->num_partenaire;
       
        
            
        }
        */
        
        return view('infirmier.liste-prelevement', compact('patients'));
    }

    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function prelever($id_patient){
        return view('infirmier.prelever', compact('id_patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Signe::create([
            'patient_id'=>$request->patient_id,
            'poids' => $request->poids,
            'temperature' => $request->temperature,
            'tension' => $request->tension,
            'user_id' => $request->user_id,
            'taille' => $request->taille
        ]);
        return redirect()->intended(route('patient.show_all'))
            ->with('success', 'Patient prelever');
    }

    /**
     * Display the specified resource.
     */
    public function show(Infirmier $infirmier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Infirmier $infirmier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Infirmier $infirmier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infirmier $infirmier)
    {
        //
    }
}
