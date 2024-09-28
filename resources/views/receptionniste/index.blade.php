
@extends('base')
@section('title')
    Immma app | Receptionniste
@endsection
@section('styles_sheet')
    <link rel="stylesheet" href="{{ asset('css/tachesReception.css') }}">
@endsection
@section('content')
    @include('components.nav-bar')
    <section class="main">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a class="medicament" href="{{ url('/medicament/create') }}"></a>
    <a class="patient" href="{{ url('/patient/create') }}"></a>
    <a class="patient" href="{{ route('patient.show_all') }}"></a>

    </section>
@endsection

