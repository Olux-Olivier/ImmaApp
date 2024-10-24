<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imma app | Liste prescritions</title>
  
    <link rel="stylesheet" href="{{ asset('css/liste-patient.css') }}">

    <style>
    .container {
        width: 90%;
        margin: auto;
        padding: 20px;
    }

    .text-center {
        text-align: center;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
    }

    .custom-table th, .custom-table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    .custom-table thead tr {
        background-color: rgb(196, 196, 196);
        color: black;
        font-family:"comfortaa";
    }

    .custom-table tbody tr {
        background-color: #f2f2f2;
        font-family:"comfortaa";
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #e9e9e9;
    }

    .custom-table tbody tr:hover {
        background-color: #ddd;
    }

    .btn-warning {
        background-color: #ffcc00;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #f44336;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-success {
        background-color: #4CAF50;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-warning:hover, .btn-danger:hover, .btn-success:hover {
        opacity: 0.8;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #c3e6cb;
        border-radius: 4px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
    
</head>
<body> 
<section>
        <div class="bloc_menu">
            <h2>ImmApp</h2>
            <div>
            <a href="#" class="exception">Dashboard Medecin</a>
                <a href="{{ route('medecin.index')}}" class="normal">Liste des prélevements</a>
                <a href="{{ route('medecin.consultations') }}" class="normal" >Liste des consultations</a>
                <a href="{{ route('medecin.examen-attente') }}" class="normal" >Liste examens attente</a>
                <a href="{{ route('medecin.examen-fait') }}" class="normal">Liste examens faits</a>
                <a href="{{route('medecin.prescriptions')}}" class="normal" style="color:rgb(58, 107, 243);">Liste prescriptions</a>
            </div>
        </div>

        <div class="bloc_infos">
            <form action="" method="get">
                <input type="text" name="nom" value="" placeholder="Rechercher un patient" />
                <input type="submit"/>
            </form>

            <div class="container mt-5">
                @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h2 class="text-left" id="title">Liste des prescriptions</h2>
                <table class="custom-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Médicaments</th>
            <th>Période</th>
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
            <td>{{$presrciption->periode}} Jours</td>
            <td>{{$presrciption->heure}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

                <a href="{{ route('medecin.dashboard') }}" class="retour">Précédent</a>
            </div>
        </div>
   </section>
</body>
</html>