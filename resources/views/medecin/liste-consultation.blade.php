@extends('base')

@section('title')
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
    @include('components.nav-bar')
    <div class="container mt-5">
        <h2>Liste des consultations</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Postnom</th>
                    <th>Prénom</th>
                    <th>Fièvre</th>
                    <th>Fatigue</th>
                    <th>Maux de tête</th>
                    <th>Toux</th>
                    <th>Frissons</th>
                    <th>Diarrhée</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($consultations as $consultation)
        
                <tr>
                    <td>{{$consultation->nom}}</td>
                    <td>{{$consultation->postnom}}</td>
                    <td>{{$consultation->prenom}}</td>
                    <td>{{$consultation->fievre}}</td>
                    <td>{{$consultation->fatigue}}</td>
                    <td>{{$consultation->mauxTete}}</td>
                    <td>{{$consultation->toux}}</td>
                    <td>{{$consultation->frissons}}</td>
                    <td>{{$consultation->diarrhee}}</td>
                    <td>
                        <a href="{{ route('medecin.prescription', $consultation->patient_id) }}" class="btn btn-success btn-sm">Prescrire medicament</a>
                        @if($consultation->examen == "oui")
                            <button class="btn btn-warning btn-sm">Examen demandé</button>
                        @else
                            <a href="/demande-examen/{{$consultation->patient_id}}" class="btn btn-success btn-sm">Demander Examen</a>
                        @endif
                </tr>


            @endforeach


            </tbody>
        </table>
    </div>
    
<a href="{{ route('medecin.dashboard') }}">Retour</a>
@endsection

@section('scripts')
@endsection
