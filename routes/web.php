<?php

use App\Http\Controllers\InfirmierController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicamentController;

Route::get('/', function () {
    return view('connexion');
});

Route::post('/',[\App\Http\Controllers\AuthController::class, 'login']);

Route::resource('patient', PatientController::class);

Route::resource('medicament', MedicamentController::class);

Route::get('/taches-reception', function () {
    return view('receptionniste.index');
})->name('receptionniste.index');

Route::resource('infirmier', InfirmierController::class);

Route::resource('laboratain', \App\Http\Controllers\LaboratainController::class);

Route::resource('medecin',\App\Http\Controllers\MedecinController::class);

Route::resource('receptioniste', \App\Http\Controllers\ReceptionisteController::class);


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
