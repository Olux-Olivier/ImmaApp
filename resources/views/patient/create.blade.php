<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'identification du patient</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Mise en page pour diviser les champs en deux colonnes */
    .form-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;

    }

    /* Les champs prennent 48% de la largeur pour tenir sur deux colonnes */
    form{
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        padding-top: 20px;
        padding-left:20px;
        padding-right:20px;
        border-radius: 10px;
    }
    .form-group {
      flex: 0 0 40%;
      margin-bottom: 10px;
    }
    a{
        color:white;
    }

    /* Sur petits écrans, revenir à une seule colonne */
    @media (max-width: 768px) {
      .form-group {
        flex: 0 0 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h4 class="text-center mb-4">Identifier patient</h4>

    <form action="/patient" method="POST">
      @csrf

      <div class="form-row">
        <!-- Nom -->
        <div class="form-group">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{old('nom')}}" required>
          @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Post-nom -->
        <div class="form-group">
          <label for="postnom" class="form-label">Post-nom</label>
          <input type="text" class="form-control @error('postnom') is-invalid @enderror" id="postnom" value="{{old('postnom')}}" name="postnom" required>
          @error('postnom')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Prénom -->
        <div class="form-group">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom"value="{{old('prenom')}}" name="prenom" required>
          @error('prenom')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Profession -->
        <div class="form-group">
          <label for="profession" class="form-label">Profession</label>
          <input type="text" class="form-control @error('profession') is-invalid @enderror" id="profession" value="{{old('profession')}}" name="profession" required>
          @error('profession')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Date de naissance -->
        <div class="form-group">
          <label for="date_naissance" class="form-label">Date de naissance</label>
          <input type="date" class="form-control @error('date_naissance') is-invalid @enderror" id="date_naissance" value="{{old('date_naissance')}}" name="date_naissance" required>
          @error('date_naissance')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Nationalité -->
        <div class="form-group">
          <label for="nationalite" class="form-label">Nationalité</label>
          <input type="text" class="form-control @error('nationalite') is-invalid @enderror" id="nationalite" value="{{old('nationalite')}}" name="nationalite" required>
          @error('nationalite')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Âge -->
        <div class="form-group">
          <label for="age" class="form-label">Âge</label>
          <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" value="{{old('age')}}" name="age" required>
          @error('age')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- État civil -->
        <div class="form-group">
          <label for="etat_civil" class="form-label">État civil</label>
          <select class="form-select @error('etat_civil') is-invalid @enderror" id="etat_civil" name="etat_civil" required>
            <option value="" disabled selected>Sélectionnez l'état civil</option>
            <option value="celibataire">Célibataire</option>
            <option value="marie">Marié(e)</option>
            <option value="divorce">Divorcé(e)</option>
            <option value="veuf">Veuf(ve)</option>
          </select>
          @error('etat_civil')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Sexe -->
        <div class="form-group">
          <label for="sexe" class="form-label">Sexe</label>
          <select class="form-select @error('sexe') is-invalid @enderror" id="sexe" name="sexe" required>
            <option value="" disabled selected>Sélectionnez le sexe</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
          </select>
          @error('sexe')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Numéro du partenaire confident/informé -->
        <div class="form-group">
          <label for="num_partenaire" class="form-label">Numéro du partenaire confident/informé</label>
          <input type="tel" class="form-control @error('num_partenaire') is-invalid @enderror" id="num_partenaire" value="{{old('num_partenaire')}}" name="num_partenaire" required>
          @error('num_partenaire')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Bouton de soumission -->
        <div class="form-group w-100">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
        <!-- Bouton de soumission -->
        <div class="form-group w-100">
          <button type="submit" class="btn btn-primary">
            <a href="{{ url('/taches-reception') }}">Précedent</a>
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
