@extends('base')
@section('title')
    Imma app | Prescription
@endsection

@section('styles_sheet')
@endsection

@section('content')

    @include('components.nav-bar')

    <form method="POST" action="/submit-form">
        <!-- Médicament -->
        <div class="form-group mb-3">
            <label for="medicament">Médicament</label>
            <input type="text" class="form-control" id="medicament" name="medicament" placeholder="Entrez le nom du médicament" required>
        </div>

        <!-- Période -->
        <div class="form-group mb-3">
            <label for="periode">Période (jours)</label>
            <input type="number" class="form-control" id="periode" name="periode" placeholder="Entrez la période en jours" required>
        </div>

        <!-- Heure -->
        <div class="form-group mb-3">
            <label for="heure">Heure (intervalle en heures)</label>
            <input type="number" class="form-control" id="heure" name="heure" placeholder="Entrez l'intervalle en heures" required>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

@endsection

@section('scripts')
@endsection
