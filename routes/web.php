<?php

use App\Http\Controllers\InfirmierController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicamentController;

Route::get('/', function () {
    return view('connexion');
})->name('login');

Route::post('/',[\App\Http\Controllers\AuthController::class, 'login']);
Route::get('/logout',[\App\Http\Controllers\AuthController::class, 'logout']);

Route::resource('patient', PatientController::class);

Route::resource('medicament', MedicamentController::class);

Route::get('/taches-reception', function () {
    return view('receptionniste.index');
})->name('receptionniste.index');

Route::resource('infirmier', InfirmierController::class);
Route::get('/prelever/{id}', [InfirmierController::class, 'prelever'])->name('infirmier.prelever');
Route::get('/dashboard-infirmier',function(){
    return view('infirmier.dashboard');
})->name('infirmier.dashboard');
Route::get('/infirmier-prelevement-attente',[InfirmierController::class, 'prelevement_attente'])->name('infirimier.prelevement-attente');

Route::resource('laboratain', \App\Http\Controllers\LaboratainController::class);
Route::get('/examen/{id}', function($id){
    return view('laboratain.examen', ['id' => $id]);
})->name('laboratain.examiner');
Route::get('/dashboard-receptionniste', function(){ return view('receptionniste.dashboard');})->name('receptioniste.dashboard');

Route::get('/dashboard-laboratain', function(){ return view('laboratain.dashboard');})->name('laboratain.dashboard');
Route::get('/examen-fait-laboratain',[\App\Http\Controllers\LaboratainController::class, 'examen_fait'])->name('laboratain.examen-fait');
Route::get('/patient-positif',[\App\Http\Controllers\LaboratainController::class, 'patient_positif'])->name('laboratain.patient-positif');
Route::get('/patient-negatif',[\App\Http\Controllers\LaboratainController::class, 'patient_negatif'])->name('laboratain.patient-negatif');

Route::resource('medecin',\App\Http\Controllers\MedecinController::class);
Route::get('/dashboard-medecin', function(){ return view('medecin.dashboard');})->name('medecin.dashboard');
Route::get('/consultation/{id}',[\App\Http\Controllers\MedecinController::class, 'consultation'] )->name('medecin.consultation');
Route::post('/consultation',[\App\Http\Controllers\MedecinController::class, 'store_consultation'] );
Route::get('/prescription/{id}',[\App\Http\Controllers\MedecinController::class, 'prescription'] )->name('medecin.prescription');
Route::post('/prescription',[\App\Http\Controllers\MedecinController::class, 'store_prescription'] );
Route::get('/prescriptions', [\App\Http\Controllers\MedecinController::class, 'prescriptions'] )->name('medecin.prescriptions');
Route::post('/prescription',[\App\Http\Controllers\MedecinController::class, 'store_prescription'] );
Route::get('/demande-examen/{id}', [\App\Http\Controllers\MedecinController::class, 'demandeExamen'])->name('medecin.demandeExamen');
Route::get('/examen-attente', [\App\Http\Controllers\MedecinController::class,'examen_attente'])->name('medecin.examen-attente');
Route::get('/examen-fait',[\App\Http\Controllers\MedecinController::class, 'examen_fait'])->name('medecin.examen-fait');

Route::get('/consultations',[\App\Http\Controllers\MedecinController::class, 'consultations'])->name('medecin.consultations');

Route::resource('receptioniste', \App\Http\Controllers\ReceptionisteController::class);
Route::get('/listes-patients', [App\Http\Controllers\PatientController::class, 'show_all'])->name('patient.show_all');

Route::get('/listes-patients-infirmier', [App\Http\Controllers\PatientController::class, 'show_all_infirmier'])->name('patient.show_all_infirmier');


Route::get('/users', function () {

    \App\Models\User::create([
        'name' => 'Gopher Kaseya',
        'role' => '1',
        'email' => 'gopher@gopher.com',
        'password' => Hash::make('gopher')
    ]);

    \App\Models\User::create([
        'name' => 'John Doe',
        'role' => '2',
        'email' => 'john.doe@example.com',
        'password' => Hash::make('password123')
    ]);

    \App\Models\User::create([
        'name' => 'Jane Smith',
        'role' => '3',
        'email' => 'jane.smith@example.com',
        'password' => Hash::make('securePassword!')
    ]);

    \App\Models\User::create([
        'name' => 'Michael Johnson',
        'role' => '4',
        'email' => 'michael.johnson@example.com',
        'password' => Hash::make('mikePass2024')
    ]);
});

Route::get('/form-prescrire', function (){
    return view('medecin.prescription');
});


Route::get('/make-call',[\App\Http\Controllers\TwilioController::class, 'makeCall']);

