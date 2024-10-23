<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImmaApp | Enregistrer medicament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/ajouterMedicament.css') }}">
</head>
<body>

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
    @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center mx-auto" role="alert" style="width: fit-content;">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    @endif
</body>
</html>
