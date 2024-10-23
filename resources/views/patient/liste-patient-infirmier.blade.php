<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ImmApp | Prélevements attente</title>
  
    <link rel="stylesheet" href="{{ asset('css/liste-patient.css') }}">

    <style>
    .container {
        width: 90%;
        margin: auto;
        padding: 20px;
    }

    .text-center {
        text-align: center;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
    }

    .custom-table th, .custom-table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    .custom-table thead tr {
        background-color: rgb(196, 196, 196);
        color: black;
        font-family:"comfortaa";
    }

    .custom-table tbody tr {
        background-color: #f2f2f2;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #e9e9e9;
    }

    .custom-table tbody tr:hover {
        background-color: #ddd;
    }

    .btn-warning {
        background-color: #ffcc00;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #f44336;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-success {
        background-color: #4CAF50;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-warning:hover, .btn-danger:hover, .btn-success:hover {
        opacity: 0.8;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #c3e6cb;
        border-radius: 4px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
    
</head>
<body>

    <section>
        <div class="bloc_menu">
            <h2>ImmApp</h2>
            <div>
                <a href="#" class="exception">Dashboard Infirmerie</a>
                <a href="{{ route('infirimier.prelevement-attente') }}" class="normal">Prelevement en attente</a>
                <a href="{{ route('patient.show_all_infirmier') }}" class="normal">Liste de prelevements</a>
            </div>
        </div>

        <div class="bloc_infos">
            <form action="" method="get">
                <input type="text" name="nom" value="" placeholder="Rechercher un patient" />
                <input type="submit"/>
            </form>

            <div class="container mt-5">
                @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h2 class="text-left" id="title">Liste des Patients</h2>
                <table class="custom-table">
                    <thead>
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
                        @if($patient['prelever'] === 'oui')
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
                                    <button class="btn-warning">Modifier</button>
                                    <button class="btn-danger">Supprimer</button>
                                @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->role == 2)
                                    @if ($patient['prelever'] === 'oui')
                                        <button class="btn-success">Deja Prélever</button>
                                    @else
                                        <a href="{{ route('infirmier.prelever', $patient['id']) }}" class="btn-warning">Prélever</a>
                                    @endif
                                @endif
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('infirmier.dashboard') }}" class="retour">Précédent</a>
            </div>
        </div>
</body>
</html>