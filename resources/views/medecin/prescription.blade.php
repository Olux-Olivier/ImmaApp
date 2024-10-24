@extends('base')
@section('title')
    Imma app | Prescription
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/FormPrescription.css') }}">
@endsection

@section('content')

<div class="bloc_form">
<h4>Formulaire de prescription</h4>
<form method="POST" action="/prescription">
    @csrf
    <select name="medicaments[]" id="medicament" multiple required>
        @foreach($medicaments as $medicament)
            <option value="{{$medicament->nom}}">{{$medicament->nom}}</option>
        @endforeach
    </select>

    <input type="hidden" name="patient_id" value="{{$id}}">

    <input type="number" id="periode" name="periode" placeholder="Période en jours" required>


    <input type="time" id="heure" name="heure" placeholder="Heure de prise" required>

    <button type="submit">Enregistrer</button>
</form>
<a href="{{ route('medecin.dashboard') }}" class="precedent">Précédent</a>
    <a href="{{route('medecin.prescriptions')}}" class="precedent">Liste des prescriptions</a>

</div>

@endsection

@section('scripts')
@endsection
