<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">  -->
    <title>Formulaire de creation chauffeur</title>

    <style>
        .form_container {
            position: absolute;
            top: 50%;
            right: 50%;
            height: 70%;

            max-width: 320px;
            width: 100%;
            transform: translate(-50%, -50%);
            z-index: 101;
            background: #fff;
            padding: 25px;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1);
        }

        .form_container .button {
            background-color: #d90429;
            margin-top: 30px;
            width: 100%;
            padding: 10px 0;
            border-radius: 10px;
        }

        .input_box input {
            height: 100%;
            width: 100%;

            border: none;
            padding: 0 30px;
            outline: none;
            color: #333;
            transition: all 0.2s ease;
            border-bottom: 1.5px solid #aaaaaa;
        }

        .erreur {
            color: red;
        }
    </style>
</head>

<body>
    <section class="home">
        <div class="form_container ">
            <div class="form login_form">

                <form method="POST" action="{{ route('chauffeur.store') }}">
                    @csrf
                    <h2>Enregistrement d'un chauffeur</h2>

                    @if (session()->has('categorie_error'))
                    <p class="erreur">{{ session('categorie_error') }}</p>
                    @endif

                    <br>


                    <div class="input_box">
                        <input id="nom" type="text" name="nom" value="{{ old('nom') }}" placeholder="Entrez votre nom" required autofocus>
                    </div>

                    @if($errors->has('nom'))
                    <p style="color: red;">{{ $errors->first('nom') }}</p>
                    @endif
                    <br>


                    <div class="input_box">
                        <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" placeholder="Entrez votre prenom" required>
                    </div>
                    @if($errors->has('prenom'))
                    <p style="color: red;">{{ $errors->first('prenom') }}</p>
                    @endif
                    <br>
                    <div class="input_box">
                        <input id="experience" type="number" name="experience" value="{{ old('experience') }}" placeholder="Entrez le nombre d'annees d'experience" required>
                    </div>

                    @if($errors->has('experience'))
                    <p style="color: red;">{{ $errors->first('experience') }}</p>
                    @endif
                    <br>
                    <div class="input_box">
                        <input id="numero_permis" type="text" name="numero_permis" value="{{ old('numero_permis') }}" placeholder="Entrez votre numero de permis " required>
                    </div>

                    @if($errors->has('numero_permis'))
                    <p style="color: red;">{{ $errors->first('numero_permis') }}</p>
                    @endif
                    <br>
                    <div class="input_box">
                        <input id="date_emission" type="date" name="date_emission" value="{{ old('date_emission') }}" placeholder="Entrez la date d'emission " required>
                    </div>
                    @if($errors->has('date_emission'))
                    <p style="color: red;">{{ $errors->first('date_emission') }}</p>
                    @endif

                    <br>
                    <div class="input_box">
                        <input id="expiration" type="date" name="expiration" value="{{ old('expiration') }}" placeholder="Entrez la date d'expiration " required>
                    </div>

                    @if($errors->has('expiration'))
                    <p style="color: red;">{{ $errors->first('expiration') }}</p>
                    @endif
                    <br>
                    <div class="input_box">
                        <input id="categorie" type="text" name="categorie" value="{{ old('categorie') }}" placeholder="Entrez la categorie du permis " required>
                    </div>

                    @if($errors->has('categorie'))
                    <p style="color: red;">{{ $errors->first('categorie') }}</p>
                    @endif
                    <br>
                    <div class="input_box">
                        <input id="contrat" type="text" name="contrat" value="{{ old('contrat') }}" placeholder="Entrez le contrat " required>
                    </div>

                    @if($errors->has('contrat'))
                    <p style="color: red;">{{ $errors->first('contrat') }}</p>
                    @endif
                    <br>
                    <div class="input_box">
                        <label for="vehicule_id">Véhicule :</label>
                        <select name="vehicule_id">
                            <option value="">Selectionner un vehicule</option>
                            @foreach ($vehicules as $vehicule)
                            <option value="{{ $vehicule->id }}">{{ $vehicule->marque }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="button">Enregistrer</button>
                </form>
            </div>
        </div>
    </section>













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