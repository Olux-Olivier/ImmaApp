@extends('base')

@section('title')
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
    <h1>Examen fait </h1>
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Age</th>
            <th>Etat examen</th>
            <th>Date demande</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($examens as $examen)
        <tr>
            <td>{{ $examen['nom'] }}</td>
            <td>{{ $examen['postnom'] }}</td>
            <td>{{ $examen['prenom'] }}</td>
            <td>{{ $examen['sexe'] }}</td>
            <td>{{ $examen['age'] }}</td>
            <td>{{ $examen['etat'] }}</td>
            <td>{{ $examen['created_at'] }}</td>
            <td> <a href="{{ route('medecin.prescription', $examen['patient_id']) }}" class="btn btn-success btn-sm">Prescrire medicament</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('medecin.dashboard') }}">Retour</a>
@endsection