<section class="header">
    <div class="logo">
        <h2>Imm<span>App</span></h2>
        <div class="image">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
    </div>

    <div class="liens">
        @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
            <p class="initial">Receptionniste</p>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role == 2)
            <p class="initial">Infirmier</p>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role == 3)
            <p class="initial">Medecin</p>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role == 4)
            <p class="initial">Laboratain</p>
        @endif
        @auth
            <p class="nom">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            <p class="bouton"><a href="/logout">Se deconnecter</a></p>
        @endauth

    </div>
</section>
