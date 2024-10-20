<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Examen;
use App\Models\Medecin;
use App\Models\Medicament;
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
                $signe['consultation'] = false;
            }else{
                $signe['consultation'] = true;
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

    public function consultations(){

        $consultations = Consultation::orderBy('created_at', 'desc')->get();

        foreach ($consultations as $consultation) {

            $patient = Patient::find($consultation->patient_id);
            $patient_examen = Examen::where('patient_id',$consultation->patient_id)->get();
            $consultation['nom'] = $patient->nom;
            $consultation['postnom'] = $patient->postnom;
            $consultation['prenom'] = $patient->prenom;
            if($patient_examen->isEmpty()){
                $consultation['examen'] = 'non';
            }else{
                $consultation['examen'] = 'oui';
            }

        }
        return view('medecin.liste-consultation', compact('consultations'));

    }

    public function demandeExamen($id)
    {
        $patient = Examen::where('patient_id', $id)->first();

        if ($patient == null) {
            Examen::create([
                'patient_id' => $id,
                'etat' => 'null',
                'user_id' => Auth::user()->id,
            ]);
        }
        return to_route('medecin.consultations');
    }

    public function prescription($id)
    {
        $medicaments = Medicament::all();
        return view('medecin.prescription', compact('id', 'medicaments'));
    }

    public function store_prescription(Request $request){
        Prescription::create([
            'patient_id' => $request->patient_id,
            'medicament' => json_encode($request->medicaments),
            'periode' => $request->periode,
            'heure'=> $request->heure,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('medecin.prescription', $request->patient_id)->with(['success' => 'Prescription reussie']);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function prescriptions()
    {
        $presrciptions = Prescription::orderBy('created_at', 'desc')->get();
        foreach ($presrciptions as $presrciption) {
            $patient = Patient::find($presrciption->patient_id);
            $presrciption['nom'] = $patient->nom;
            $presrciption['prenom'] = $patient->prenom;
            $presrciption['medicament'] = json_decode($presrciption->medicament);
        }
        return view('medecin.liste-prescription', compact('presrciptions'));
    }

    public function examen_attente(){
        $examens = Examen::where('etat', '=', 'null')->get();
        foreach($examens as $examen){
            $patient = Patient::find($examen->patient_id);
            $examen['nom'] = $patient->nom;
            $examen['postnom'] = $patient->postnom;
            $examen['prenom'] = $patient->prenom;
            $examen['sexe'] = $patient->sexe;
            $examen['age'] = $patient->age;
        }
        return view('medecin.examen-attente', compact('examens'));
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
        return view('medecin.examen-fait', compact('examens'));
    }

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
