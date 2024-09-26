<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Partenaires</title>
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section class="header">
    <div class="logo">
        <h2>Imm<span>App</span></h2>
        <div class="image">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
    </div>

    <div class="liens">
        <p class="initial">OK</p>
        <p class="nom">Olivier Kasongo</p>
        <p class="bouton"><a href="#">Se deconnecter</a></p>
    </div>
</section>
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
