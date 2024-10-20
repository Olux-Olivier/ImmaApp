<h2>Prelevement en attente</h2>
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
                    <a href="{{ route('infirmier.prelever', $patient['id']) }}" class="btn btn-warning btn-sm">Prélever</a>
                </td>
            </tr>
        @endforeach
        </tbody>
</table>