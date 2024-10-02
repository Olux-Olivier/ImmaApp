@extends('base')
@section('title')
    Imma app | Prescription
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="{{ asset('css/FormPrescription.css') }}">
@endsection

@section('content')

    @include('components.nav-bar')
<div class="bloc_form">
<h4>Formulaire de prescription</h4>
<form method="POST" action="/submit-form">
    <!-- Médicament (Select multiple choix) -->
    <select name="medicament[]" id="medicament" multiple required>
        <option value="" disabled>Choisissez le(s) médicament(s)</option>
        <option value="medicament1">Médicament 1</option>
        <option value="medicament2">Médicament 2</option>
        <option value="medicament3">Médicament 3</option>
        <option value="medicament4">Médicament 4</option>
    </select>

    <!-- Période (jours) -->
    <input type="number" id="periode" name="periode" placeholder="Période en jours" required>

    <!-- Heure (intervalle en heures) -->
    <input type="number" id="heure" name="heure" placeholder="Heure de prise" required>

    <!-- Bouton de soumission -->
    <button type="submit">Enregistrer</button>
</form>
<a href="#" class="precedent">Précédent</a>

</div>

@endsection

@section('scripts')
@endsection
