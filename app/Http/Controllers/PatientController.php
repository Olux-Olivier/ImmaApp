<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use App\Models\Signe;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
    {
        Patient::create($request->validated());
        return redirect()->route('receptioniste.index')
            ->with('success', 'Patient enregistrer avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    public function show_all(Request $request){
        
        $patients = Patient::query();
        $input = $request->nom;

        if ($request->has('nom')) {
            $nom = $request->input('nom');
            $patients->where('nom', 'like', "%$nom%")
                     ->orWhere('postnom', 'like', "%$nom%")
                     ->orWhere('prenom', 'like', "%$nom%");
        }
        
        // Récupérer les patients après avoir appliqué les filtres
        $patients = $patients->get();

        //$patients = Patient::orderBy('created_at', 'desc')->get();
        $signes = Signe::orderBy('created_at', 'desc')->get();
        
        foreach ($patients as $patient) {
            foreach ($signes as $signe) {
                if($patient->id == $signe->patient_id){
                    $patient['prelever'] = 'oui';
                }
            }
        }
        return view('patient.liste', compact('patients', 'input'));
    }

    public function show_all_infirmier(Request $request){
        $patients = Patient::query();

        if ($request->has('nom')) {
            $nom = $request->input('nom');
            $patients->where('nom', 'like', "%$nom%")
                     ->orWhere('postnom', 'like', "%$nom%")
                     ->orWhere('prenom', 'like', "%$nom%");
        }
        
        // Récupérer les patients après avoir appliqué les filtres
        $patients = $patients->get();

        //$patients = Patient::orderBy('created_at', 'desc')->get();
        $signes = Signe::orderBy('created_at', 'desc')->get();
        
        foreach ($patients as $patient) {
            foreach ($signes as $signe) {
                if($patient->id == $signe->patient_id){
                    $patient['prelever'] = 'oui';
                }
            }
        }
        

        return view('patient.liste-patient-infirmier', compact('patients'));
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
