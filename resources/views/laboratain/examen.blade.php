@extends('base')
@section('title')
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="{{ asset('css/FormExamen.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
    @include('components.nav-bar')
    @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    <div class="bloc_form">
            <h4>Formulaire d'examen</h2>
            
            <form method="POST" action="/laboratain">
                @csrf
                <select name="symptomes" id="symptomes" required>
                    <option value="" disabled selected>Choisissez l'état de l'examen</option>
                    <option value="positif">Positif</option>
                    <option value="negatif">Négatif</option>
                </select>
                <input type="hidden" name="patient_id" value="{{$id}}">
                <br><br>

                <button type="submit">Envoyer</button>
            </form>
            <a href="/laboratain" class="precedent">Précédent</a>
    </div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

