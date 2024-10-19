<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Age</th>
            <th>Etat</th>
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
            <td>positif</td>
        </tr>
        @endforeach
    </tbody>
</table>