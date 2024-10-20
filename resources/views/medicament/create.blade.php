<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImmaApp | Enregistrer medicament</title>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
</head>
<body>
<div style="width: 70%; align-content: center;">
    @if(session('success'))
        <div style="background: green; color: white; display: inline-block">
            {{ session('success') }}
        </div>
    @endif
</div>
<section>

        <div class="div_image">
            <img src="{{ asset('img/medicament.jfif') }}" alt="">
        </div>

        <div class="div_form">
            <h2>Imm<span>App</span></h2>
            <form action="{{route('medicament.store')}}" method="POST">
                @csrf
                <div>
                    <input type="text" name="medicament" placeholder="Nom medicament">
                </div>

                <div>
                    <input type="submit" value="Ajouter">
                    <a href="{{ route('receptioniste.dashboard') }}">Retour</a>
                </div>

            </form>
        </div>
    </section>
</body>
</html>
