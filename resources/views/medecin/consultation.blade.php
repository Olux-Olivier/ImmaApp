@extends('base')

@section('title')
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="{{ asset('css/FormPatient.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
    @include('components.nav-bar')
    <div class="bloc_form">
        <form action="/consultation" method="POST">
        @csrf
        <h4 class="titre_consultation">Formulaire de consultation</h4>
        <input type="hidden" name="patient_id" value="{{$id}}"/>
        <div class="bloc_principal">

            <!-- debut bloc 1 -->
            <div class="bloc_1">

                <select name="fievre" id="fievre" required>
                    <option value="">Avez-vous de la fièvre ?</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>

                <select name="fatigue" id="fatigue" required>
                    <option value="">Vous sentez-vous fatigué ?</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
            <!-- fin bloc 1 -->

            <!-- debut bloc 2 -->
            <div class="bloc_2">
                <select name="mauxTete" id="mauxTete" required>
                    <option value="">Avez-vous des maux de tête ?</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>

                <select name="toux" id="toux" required>
                    <option value="">Avez-vous une toux ?</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
            <!-- fin bloc 2 -->

            <!-- debut bloc 3 -->
            <div class="bloc_3">
                <select name="frissons" id="frissons" required>
                <option value="">Avez-vous des frissons ?</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
                </select>

                <select name="diarrhee" id="diarrhee" required>
                    <option value="">Avez-vous de la diarrhée ?</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
            <!-- fin bloc 3 -->
        </div>
        
        <div class="actions">
            <button type="submit">Soumettre</button>
        </div>
        
    </form>

    <div>
@endsection

@section('scripts')
@endsection
