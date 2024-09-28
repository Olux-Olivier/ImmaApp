@extends('base')

@section('title')
@endsection

@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
    @include('components.nav-bar')
    <div class="container mt-5">
    <form action="/consultation" method="POST">
        @csrf
        <input type="hidden" name="patient_id" value="{{$id}}"/>
        <div class="form-group">
            <label for="fievre">Fièvre</label>
            <input type="text" name="fievre" id="fievre" class="form-control" placeholder="Avez-vous de la fièvre ?" required>
        </div>

        <div class="form-group">
            <label for="fatigue">Fatigue</label>
            <input type="text" name="fatigue" id="fatigue" class="form-control" placeholder="Vous sentez-vous fatigué ?" required>
        </div>

        <div class="form-group">
            <label for="mauxTete">Maux de tête</label>
            <input type="text" name="mauxTete" id="mauxTete" class="form-control" placeholder="Avez-vous des maux de tête ?" required>
        </div>

        <div class="form-group">
            <label for="toux">Toux</label>
            <input type="text" name="toux" id="toux" class="form-control" placeholder="Avez-vous une toux ?" required>
        </div>

        <div class="form-group">
            <label for="frissons">Frissons</label>
            <input type="text" name="frissons" id="frissons" class="form-control" placeholder="Avez-vous des frissons ?" required>
        </div>

        <div class="form-group">
            <label for="diarrhee">Diarrhée</label>
            <input type="text" name="diarrhee" id="diarrhee" class="form-control" placeholder="Avez-vous de la diarrhée ?" required>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
    <div>
@endsection

@section('scripts')
@endsection
