@extends('base')
@section('title')
    Imma app | Medecin
@endsection
@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection
@section('content')
    @include('components.nav-bar')
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <table class="table table-striped table-bordered">
        <h2 class="text-center">Liste des Patients</h2>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prenom</th>
            <th>Poids (kg)</th>
            <th>Température (°C)</th>
            <th>Tension</th>
            <th>Taille (cm)</th>
            <th>Actions</th>
        </thead>
        <tbody>
        @foreach($signes as $signe)
            <tr>
                <td>{{ $signe->id }}</td>
                <td>{{ $signe->nom }}</td>
                <td>{{ $signe->postnom }}</td>
                <td>{{ $signe->prenom }}</td>
                <td>{{ $signe->poids }}</td>
                <td>{{ $signe->temperature }}</td>
                <td>{{ $signe->tension }}</td>
                <td>{{ $signe->taille }}</td>
                <td>

                    @if($signe->prescription)
                        <bouton class="btn btn-success btn-sm">Deja Prescris</bouton>
                    @else
                        <a href="{{ route('medecin.consultation', $signe->patient_id) }}" class="btn btn-warning btn-sm">Prescription</a>
                        @if($signe->consultation)
                            <bouton  class="btn btn-success btn-sm">Deja consulter</bouton>
                            <a href="{{ route('medecin.demandeExamen', $signe->patient_id) }}" class="btn btn-warning btn-sm">Demander Examen</a>
                        @else
                            <a href="{{ route('medecin.consultation', $signe->patient_id) }}" class="btn btn-warning btn-sm">Consultation</a>
                       @endif
                   @endif

            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

@endsection
@section('scripts')
@endsection
