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
            </tr>
            </thead>
            <tbody>
            @foreach ($consultations as $consultation)
                <tr>
                    <td>{{ $consultation->nom }}</td>
                    <td>{{ $consultation->postnom }}</td>
                    <td>{{ $consultation->prenom }}</td>
                    <td>{{ $consultation->fievre }}</td>
                    <td>{{ $consultation->fatigue }}</td>
                    <td>{{ $consultation->mauxTete }}</td>
                    <td>{{ $consultation->toux }}</td>
                    <td>{{ $consultation->frissons }}</td>
                    <td>{{ $consultation->diarrhee }}</td>
                    <td>{{ \Carbon\Carbon::parse($consultation->created_at)->format('d/m/Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('scripts')
@endsection