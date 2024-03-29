<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Editer vehicule</title>
</head>

<body style="background-color:beige;">
    <div class="form_container">
        <div class="form login_form">
            <form method="POST" action="{{ route('vehicule.update', $vehicule->id) }}">
                @csrf
                @method('PUT')
                <h2>Editer vehicule</h2>
                <div class="input_box">
                    <label for="type">Type</label>
                    <input type="text" name="type" value="{{ $vehicule->type }}" required>
                </div>

                <div class="input_box">
                    <label for="nom">Type</label>
                    <input type="text" name="nom" value="{{ $vehicule->nom }}" required>
                </div>
                <div class="input_box">
                    <label for="date_achat">Date achat</label>
                    <input type="date" name="date_achat" value="{{ $vehicule->date_achat }}" required>

                </div>
                <div class="input_box">
                    <label for="km_par_defaut">Km par defaut</label>
                    <input type="number" name="km_par_defaut" value="{{ $vehicule->km_par_defaut }}" required>
                </div>
                <div class="input_box">
                    <label for="matricule">Matricule</label>
                    <input type="text" name="matricule" value="{{ $vehicule->matricule }}" required>
                </div>
                <br>
                <div class="input_box">
                    <label for="statut">Statut</label>
                    <select name="statut" required>
                        <option value="en marche" {{ $vehicule->statut == 'en marche' ? 'selected' : '' }}>En marche</option>
                        <option value="en panne" {{ $vehicule->statut == 'en panne' ? 'selected' : '' }}>En panne</option>
                    </select>

                </div>
                <button type="submit" class="button">Enregistrer</button>
            </form>
        </div>
    </div>
    <!-- <form method="POST" action="{{ route('vehicule.update', $vehicule->id) }}">
        @csrf
        @method('PUT')

        <label for="type">Type</label>
        <input type="text" name="type" value="{{ $vehicule->type }}" required>

        <label for="date_achat">Date achat</label>
        <input type="date" name="date_achat" value="{{ $vehicule->date_achat }}" required>

        <label for="km_par_defaut">Km par defaut</label>
        <input type="number" name="km_par_defaut" value="{{ $vehicule->km_par_defaut }}" required>

        <label for="matricule">Matricule</label>
        <input type="text" name="matricule" value="{{ $vehicule->matricule }}" required>

        <label for="statut">Statut</label>
        <select name="statut" required>
            <option value="en marche" {{ $vehicule->statut == 'en marche' ? 'selected' : '' }}>En marche</option>
            <option value="en panne" {{ $vehicule->statut == 'en panne' ? 'selected' : '' }}>En panne</option>
        </select>

        <button type="submit">Enregistrer</button>
    </form> -->

</body>

</html>