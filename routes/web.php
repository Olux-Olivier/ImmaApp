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

Route::resource('laboratain', \App\Http\Controllers\LaboratainController::class);

Route::resource('medecin',\App\Http\Controllers\MedecinController::class);
Route::get('/consultation/{id}',[\App\Http\Controllers\MedecinController::class, 'consultation'] )->name('medecin.consultation');
Route::post('/consultation',[\App\Http\Controllers\MedecinController::class, 'store_consultation'] );
Route::get('/prescription/{id}',[\App\Http\Controllers\MedecinController::class, 'prescription'] )->name('medecin.prescription');
Route::post('/prescription',[\App\Http\Controllers\MedecinController::class, 'store_prescription'] );
Route::get('/demande-examen/{id}', [\App\Http\Controllers\MedecinController::class, 'demandeExamen'])->name('medecin.demandeExamen');


Route::resource('receptioniste', \App\Http\Controllers\ReceptionisteController::class);
Route::get('/listes-patients', [App\Http\Controllers\PatientController::class, 'show_all'])->name('patient.show_all');


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

// Route::get('/prescrire', function (){
//     return view('medecin.prescription');
// });
