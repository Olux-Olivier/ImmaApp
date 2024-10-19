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
                <a href="{{ route('laboratain.index') }}">Voir examens non faits</a>
                <a href="{{ route('laboratain.examen-fait')}}">Voir examens faits</a>
                <a href="{{ route('laboratain.patient-positif') }}">Voir les patients positifs</a>
                <a href="{{ route('laboratain.patient-negatif') }}">Voir les patients negatifs</a>
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