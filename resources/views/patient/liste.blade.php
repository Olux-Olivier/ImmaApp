@extends('base')
@section('title')
    Imma app | Liste patients
@endsection
@section('styles_sheet')

    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection
@section('content')

@include('components.nav-bar')

<form action="" method="get">
    <input type="text" name="nom" value="{{old('nom', $input)}}" placeholder="Rechercher un patient"  />
    <input type="submit"/>
</form>

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="text-center">Liste des Patients</h2>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prénom</th>
            <th>Profession</th>
            <th>Date de Naissance</th>
            <th>Nationalité</th>
            <th>Âge</th>
            <th>État Civil</th>
            <th>Sexe</th>
            <th>Numéro de Partenaire</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient['nom'] }}</td>
                <td>{{ $patient['postnom'] }}</td>
                <td>{{ $patient['prenom'] }}</td>
                <td>{{ $patient['profession'] }}</td>
                <td>{{ $patient['date_naissance'] }}</td>
                <td>{{ $patient['nationalite'] }}</td>
                <td>{{ $patient['age'] }}</td>
                <td>{{ $patient['etat_civil'] }}</td>
                <td>{{ $patient['sexe'] }}</td>
                <td>{{ $patient['num_partenaire'] }}</td>

                <td>

                    @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
                            <button class="btn btn-warning btn-sm">Modifier</button>
                            <button class="btn btn-danger btn-sm">Supprimer</button>
                    @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->role == 2)
                            @if ($patient['prelever'] === 'oui')
                                <button class="btn btn-success btn-sm">Deja Prélever</button>
                            @else
                                <a href="{{ route('infirmier.prelever', $patient['id']) }}" class="btn btn-warning btn-sm">Prélever</a>
                            @endif
                        @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('receptioniste.dashboard')}}"> Retour</a>
</div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
