<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Medecin</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
   <section>
        <div class="bloc_menu">
            <h2>ImmApp</h2>
            <div>
                <a href="{{ route('medecin.index')}}">Voir les prelements</a>
                <a href="{{ route('medecin.consultations') }}">Voir les consultations</a>
                <a href="#">Voir les examens attente</a>
                <a href="#">Voir les examens faits</a>
                <a href="#">lien</a>
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