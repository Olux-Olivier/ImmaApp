@extends('base')
@section('title')
    Imma app | Connexion
@endsection
@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
@endsection
@section('content')
    <section>
        <div class="div_image">
            <img src="{{ asset('img/connexion.jpg') }}" alt="">
        </div>

        <div class="div_form">
            <h2>Imm<span>App</span></h2>
            <form action="" method="POST">
                @csrf
                <div>
                    <input type="email" autocomplete="off" name="email" placeholder="Email">
                </div>

                <div>
                    <input type="password" autocomplete="off" name="password" placeholder="Password">
                </div>

                <div>
                    <input type="submit"  value="Login">
                    <a href="#">Mot de passe oublié ?</a>
                </div>

            </form>
        </div>
    </section>
@endsection


