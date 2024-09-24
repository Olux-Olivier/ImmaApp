<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicamentController;

Route::get('/', function () {
    return view('connexion');
});

Route::resource('patient', PatientController::class)->names([
    'index' => 'patient.index',
    'create' => 'patient.create',
    'edit' => 'patient.edit',
    'update' => 'patient.update',
]);

Route::resource('medicament', MedicamentController::class)->names([
    'index' => 'medicament.index',
    'create' => 'medicament.create',
    'edit' => 'medicament.edit',
    'update' => 'medicament.update',
]);
