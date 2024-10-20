<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Labo</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
   <section>
        <div class="bloc_menu">
            <h2>ImmApp</h2>
            <div>
                <a href="{{ url('/medicament/create') }}">Enregistrer un medicament</a>
                <a href="{{ url('/patient/create')}}">Enregistrer patient</a>
                <a href="{{ route('patient.show_all') }}">Voir liste patients</a>
            </div>
        </div>

        <div class="bloc_infos">
            <div>
                <span>lorem</span>
            </div>

            <div>
                <span>lorem</span>
            </div>

            <div>
                <span>lorem</span>
            </div>

            <div>
                <span>lorem</span>
            </div>
        </div>
   </section>
</body>
</html>