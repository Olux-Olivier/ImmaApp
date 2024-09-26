<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taches receptionniste</title>
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
</head>
<body>
    <section class="header">
        <div class="logo">
            <h2>Imm<span>App</span></h2>
            <div class="image">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
        </div>

        <div class="liens">
            <p class="initial">OK</p>
            <p class="nom">Olivier Kasongo</p>
            <p class="bouton"><a href="#">Se deconnecter</a></p>
        </div>
    </section>

    <section class="main">
        <a class="medicament" href="{{ url('/medicament/create') }}"></a>
        <a class="patient" href="{{ url('/patient/create') }}"></a>
    </section>
</body>
</html>