<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Signe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Enregistrement des Signes</h2>
    <form action="{{ route('infirmier.store') }}" method="POST">
        @csrf
        <input type="hidden" name="patient_id" value="{{$id_patient}}" >
        <div class="form-group">
            <label for="poids">Poids (kg)</label>
            <input type="number" step="0.1" class="form-control" id="poids" name="poids" required>
        </div>

        <div class="form-group">
            <label for="temperature">Température (°C)</label>
            <input type="number" step="0.1" class="form-control" id="temperature" name="temperature" required>
        </div>

        <div class="form-group">
            <label for="tension">Tension arterielle (mmHg)</label>
            <input type="number" class="form-control" id="tension" name="tension" required>
        </div>

        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">

        <div class="form-group">
            <label for="taille">Taille (cm)</label>
            <input type="number" class="form-control" id="taille" name="taille" required>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
