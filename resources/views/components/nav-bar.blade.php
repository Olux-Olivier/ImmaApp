<section class="header">
    <div class="logo">
        <h2>Imm<span>App</span></h2>
        <div class="image">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
    </div>

    <div class="liens">
        
        <p class="initial">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>

        @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
            <p class="initial" style="background:none;color:black">Fonction : Receptionniste</p>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role == 2)
            <p class="initial" style="background:none;color:black">Fonction : Infirmier</p>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role == 3)
            <p class="initial" style="background:none;color:black">Fonction : Medecin</p>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role == 4)
            <p class="initial" style="background:none;color:black">Fonction : Laboratain</p>
        @endif
        @auth
            
            <p class="bouton"><a href="/logout">Se deconnecter</a></p>
        @endauth

    </div>
</section>
