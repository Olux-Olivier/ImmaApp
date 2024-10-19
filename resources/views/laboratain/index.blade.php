@extends('base')
@section('title')
    Imma app | Laboratain
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
@endsection

@section('content')
    @include('components.nav-bar')
    <div class="container mt-5">
        <h4 style="margin:40px 0;">Consultations en attente d'examens</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Postnom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Fièvre</th>
                <th scope="col">Fatigue</th>
                <th scope="col">Maux de Tête</th>
                <th scope="col">Toux</th>
                <th scope="col">Frissons</th>
                <th scope="col">Diarrhée</th>
                <th scope="col">Date de Consultation</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($examens as $examen)
                <tr>
                    <td>{{ $examen->nom }}</td>
                    <td>{{ $examen->postnom }}</td>
                    <td>{{ $examen->prenom }}</td>
                    <td>{{ $examen->fievre }}</td>
                    <td>{{ $examen->fatigue }}</td>
                    <td>{{ $examen->mauxTete }}</td>
                    <td>{{ $examen->toux }}</td>
                    <td>{{ $examen->frissons }}</td>
                    <td>{{ $examen->diarrhee }}</td>
                    <td>{{ \Carbon\Carbon::parse($examen->created_at)->format('d/m/Y') }}</td>
                    <td><a href="/examen" class="btn btn-success btn-sm">Examiner</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('scripts')
@endsection
