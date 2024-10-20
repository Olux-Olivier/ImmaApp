@extends('base')
@section('title')
    Imma app | Identification Patient
@endsection
@section('styles_sheet')

    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="{{ asset('css/FormPatient.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
@endsection

@section('content')
    @include('components.nav-bar')
  <div class="bloc_form">
    
    <form action="/patient" method="POST">
    @csrf
    <div class="bloc_principal">
      <div class="bloc_1">
          <h4>Identifier patient</h4>
          <!-- Nom -->
          <input type="text" id="nom" name="nom" required placeholder="Nom">
          @error('nom')
            <div>{{ $message }}</div>
          @enderror

          <!-- Postnom -->
          <input type="text" id="postnom" name="postnom" required placeholder="Postnom">
          @error('postnom')
            <div>{{ $message }}</div>
          @enderror

          <!-- Prénom -->
          <input type="text" id="prenom" name="prenom" required placeholder="Prénom">
          @error('prenom')
            <div>{{ $message }}</div>
          @enderror
      </div>
      <!-- fin bloc 1 -->

      <!-- debut bloc 2 -->
      <div class="bloc_2">

          <!-- Profession -->
          <input type="text" id="profession" name="profession" required placeholder="Profession">
          @error('profession')
            <div>{{ $message }}</div>
          @enderror

          <!-- Date de naissance -->
          <input type="date" id="date_naissance" name="date_naissance" required>
          @error('date_naissance')
            <div>{{ $message }}</div>
          @enderror

          <!-- Nationalité -->
          <input type="text" id="nationalite" name="nationalite" required placeholder="Nationalité">
          @error('nationalite')
            <div>{{ $message }}</div>
          @enderror

          <!-- Numéro du partenaire confident/informé -->
          <input type="tel" id="num_partenaire" name="num_partenaire" required placeholder="Numéro du partenaire">
          @error('num_partenaire')
            <div>{{ $message }}</div>
          @enderror
      </div>
      <!-- fin bloc 2 -->

      <!-- debut bloc 3 -->
      <div class="bloc_3">
        <!-- Âge -->
        <input type="number" id="age" name="age" required placeholder="Âge">
        @error('age')
          <div>{{ $message }}</div>
        @enderror

        <!-- État civil -->
        <select id="etat_civil" name="etat_civil" required>
            <option value="" disabled selected>Sélectionnez l'état civil</option>
            <option value="celibataire">Célibataire</option>
            <option value="marie">Marié(e)</option>
            <option value="divorce">Divorcé(e)</option>
            <option value="veuf">Veuf(ve)</option>
        </select>
        @error('etat_civil')
          <div>{{ $message }}</div>
        @enderror

        <!-- Sexe -->
        <select id="sexe" name="sexe" required>
            <option value="" disabled selected>Sélectionnez le sexe</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
        @error('sexe')
          <div>{{ $message }}</div>
        @enderror

        <input type="email" autocomplete="off" name="email" placeholder="Email">
      </div>
      <!-- Fin bloc 3 -->

    </div>

    <div class="actions">
        <!-- Bouton de soumission -->
      <button type="submit">Enregistrer</button>
      <button type="button">
        <a href="{{ route('receptioniste.dashboard') }}">Retour</a>
      </button>
    </div>


    <!-- fin bloc principal -->
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

