<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImmaApp | Enregistrer medicament</title>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
</head>
<body>
<section>
        <div class="div_image">
            <img src="{{ asset('img/medicament.jfif') }}" alt="">
        </div>

        <div class="div_form">
            <h2>Imm<span>App</span></h2>
            <form action="">
                @csrf
                <div>
                    <input type="email" placeholder="Nom medicament">
                </div>

                <div>
                    <input type="submit" value="Ajouter">
                    <a href="{{ url('/taches reception') }}">Retour accueil ?</a>
                </div>
    
            </form>
        </div>
    </section>
</body>
</html>