<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImmaApp | Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
</head>
<body>
    <section>
        <div class="div_image">
            <img src="{{ asset('img/connexion.jpg') }}" alt="">
        </div>

        <div class="div_form">
            <h2>Imm<span>App</span></h2>
            <form action="" method="POST">
                @csrf
                <div>
                    <input type="email" name="email" placeholder="Email">
                </div>

                <div>
                    <input type="text" name="password" placeholder="Password">
                </div>

                <div>
                    <input type="submit"  value="Login">
                    <a href="#">Mot de passe oublié ?</a>
                </div>

            </form>
        </div>
    </section>
</body>
</html>
