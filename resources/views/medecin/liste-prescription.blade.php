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
        <h2>Liste des prescription</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Medicaments</th>
                <th>Periode</th>
                <th>Heure de prise</th>
            </tr>
            </thead>
            <tbody>
            @foreach($presrciptions as $presrciption)
                <tr>
                    <td>{{$presrciption->nom}}</td>
                    <td>{{$presrciption->prenom}}</td>
                    <td>
                        @foreach($presrciption->medicament as $medi)
                             {{$medi}},
                        @endforeach
                    </td>
                    <td>
                        {{$presrciption->periode}} Jours
                    </td>
                    <td>
                        {{$presrciption->heure}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    
<a href="{{ route('medecin.dashboard') }}">Retour</a>
@endsection

@section('scripts')
@endsection
