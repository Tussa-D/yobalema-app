<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/chauffeur.css') }}">
    <title>Edition chauffeur</title>
  
</head>

<body style="background-color:beige;">
    <div class="form_container">
        <div class="form login_form">
            <form method="POST" action="{{ route('chauffeur.update', $chauffeur->id) }}">
                @csrf
                @method('PUT')
                <h2>Edition chauffeur</h2>
                <div class="input_box">
                    <input type="text" placeholder="Nom" id="nom" name="nom" value="{{ $chauffeur->nom }}" required>
                </div>
                <div class="input_box">
                    <input type="text" placeholder="Prenom" id="prenom" name="prenom" value="{{ $chauffeur->prenom }}" required>
                </div>
                <div class="input_box">
                    
                    <input type="number" placeholder="Experience" id="experience" name="experience" value="{{ $chauffeur->experience }}" required>
                </div>
                <div class="input_box">
                    
                    <input type="text" placeholder="Numero de permis" id="numero_permis" name="numero_permis" value="{{ $chauffeur->numero_permis }}" required>
                </div>
                <div class="input_box">
                    <label for="date_emission">Date d'émission du permis</label>
                    <input type="date" class="form-control" id="date_emission" name="date_emission" value="{{ $chauffeur->date_emission }}" required>
                </div>
                <div class="input_box">
                    <label for="expiration">Date d'expiration du permis</label>
                    <input type="date" class="form-control" id="expiration" name="expiration" value="{{ $chauffeur->expiration }}" required>
                </div>
                <div class="input_box">
                   
                    <input type="text" placeholder="Categorie permis" id="categorie" name="categorie" value="{{ $chauffeur->categorie }}" required>
                </div>
                <div class="input_box">
                    
                    <input type="text" placeholder="Contrat" name="contrat" value="{{ $chauffeur->contrat }}" required>
                </div>
                <br>
                <div class="input_box">
                    <label for="vehicule_id">Véhicule</label>
                    <select class="form-control" id="vehicule_id" name="vehicule_id">
                        @foreach($vehicules as $vehicule)
                        <option value="{{ $vehicule->id }}" {{ $vehicule->id == $chauffeur->vehicule_id ? 'selected' : '' }}>
                            {{ $vehicule->type}}
                        </option>
                        @endforeach
                    </select>

                </div>
                <button type="submit" class="button">Modifier</button>
            </form>
        </div>
    </div>
    




    
    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    resources/views/reservations/create.blade.php -->

    <!-- @extends('layouts.app') -->

    <!-- @section('content')
    <div class="container">
     
        
    </div>
@endsection -->

</body>

</html>