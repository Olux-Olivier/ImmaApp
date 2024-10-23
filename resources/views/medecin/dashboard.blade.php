<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Medecin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
   <section>
        <div class="bloc_menu">
            <h2>ImmApp</h2>
            <div>
                <a href="#" class="exception">Dashboard Medecin</a>
                <a href="{{ route('medecin.index')}}" class="normal">Liste des prélevements</a>
                <a href="{{ route('medecin.consultations') }}" class="normal">Liste des consultations</a>
                <a href="{{ route('medecin.examen-attente') }}" class="normal">Liste examens attente</a>
                <a href="{{ route('medecin.examen-fait') }}" class="normal">Liste examens faits</a>
                <a href="{{route('medecin.prescriptions')}}" class="normal">Liste prescriptions</a>
            </div>
        </div>

        <div class="bloc_infos">

            <!-- debut bloc statistiques -->

            <div class="container d-flex justify-content-center" id="bloc_statistiques">
                <div class="row bloc_statistiques justify-content-between text-center w-100" style="max-width: 1200px;">
                    <div class="col">
                        <h2>1234</h2>
                        <span>Prélevents</span>
                    </div>

                    <div class="col">
                        <h2>1234</h2>
                        <span>Consultations</span>
                    </div>

                    <div class="col">
                        <h2>1234</h2>
                        <span>Examens demandés</span>
                    </div>

                    <div class="col">
                        <h2>1234</h2>
                        <span>Examens faits</span>
                    </div>

                    <div class="col">
                        <h2>1234</h2>
                        <span>Prescription</span>
                    </div>

                    <br>

                    <!-- Nouvelle colonne pour l'utilisateur connecté avec l'icône de profil et bouton de déconnexion -->
                    
                </div>
            </div>

             <!-- profil -->
             <div class="col d-flex align-items-center" id="profil">
                        <div class="text-center">
                            <i class="fas fa-user-circle fa-3x mb-2"></i> <!-- Icône de profil -->
                            <h4>John Doe</h4> <!-- Remplacer par le nom réel de l'utilisateur -->
                            <button class="btn btn-danger mt-2"><a href="/logout" style="color:white;text-decoration:none"> Déconnexion</a></button>
                        </div>
            </div>




            <!-- fin block statistiques -->

            <!-- debut bloc données -->
            <div class="donnees">

            </div>
            <!-- fin block données -->
        </div>
   </section>
</body>
</html>