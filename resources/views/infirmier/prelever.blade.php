@extends('base')
@section('title')
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/FormPrelevement.css') }}">
    @endsection
@section('content')

<div class="bloc_form">
    <h4>Prélever Signes</h4>
    <form action="{{ route('infirmier.store') }}" method="POST">
        @csrf
        <input type="hidden" name="patient_id" value="{{$id_patient}}" >

        <input type="number" step="0.1" id="poids" name="poids" placeholder="Poids (kg)" required>

        <input type="number" step="0.1" id="temperature" name="temperature" placeholder="Température (°C)" required>

        <input type="number" id="tension" name="tension" placeholder="Tension artérielle (mmHg)" required>

        <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">

        <input type="number" step="0.01" id="taille" name="taille" placeholder="Taille (cm)" required>

        <button type="submit">Enregistrer</button>
    </form>
    <a href="{{ route('infirmier.dashboard') }}" class="precedent">Précédent</a>
</div>


@endsection

@section('scripts')
@endsection

