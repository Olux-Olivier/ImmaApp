
@extends('base')
@section('title')
    Immma app | Receptionniste
@endsection
@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
@endsection
@section('content')
    @include('components.nav-bar')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="main">
    
    
    <a class="medicament" href="{{ url('/medicament/create') }}">
        <img src="{{ asset('img/medicament.png') }}" alt="">
        <span>Ajouter medicament</span>
    </a>

    <a class="patient" href="{{ url('/patient/create') }}">
        <img src="{{ asset('img/profile.png') }}" alt="">
        <span>Identifier patient</span>
    </a>

    <a class="patient" href="{{ route('patient.show_all') }}">
        <img src="{{ asset('img/list.png') }}" alt="">
        <span>Liste Patients</span>
    </a>

    </section>
@endsection
@section('scripts')

@endsection