<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/vehicule.css') }}">
    <title>Creation d'un vehicule</title>
</head>

<body style="background-color: gray;">

    <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- login formulaire -->

        <div class="form login_form">

            <form method="POST" action="{{ route('vehicule.store') }}">
                @csrf
                <h2>Enregistrement vehicule</h2>
                <div class="successVehicule">{{ session('success') }}</div>
                <div class="input_box">
                    <input id="marque" type="text" name="marque" placeholder="Entrez la marque du véhicule" required autofocus>
                    <i class="uil uil-envelope-alt"></i>
                </div>

                <div class="input_box">
                    <input id="model" type="text" name="model" placeholder="Entrez le model du véhicule" required>
                    <i class="uil uil-envelope-alt"></i>
                </div>

                <!-- <div class="input_box">
                    <input type="file" id="image" name="image" accept="image/*" required>
                    <i class="uil uil-photo-video"></i>
                </div> -->

                <div class="input_box">
                    <input type="date" id="date_achat" name="date_achat" placeholder="Date d'achat" required>
                    <i class="uil uil-lock"></i>
                </div>

                <div class="input_box">
                    <input type="number" id="km_par_defaut" name="km_par_defaut" placeholder="Kilométrage par défaut" required>
                    <i class="uil uil-lock"></i>
                </div>


                <div class="input_box">
                    <input type="text" id="matricule" name="matricule" placeholder="Entrez le matricule" required>
                    <i class="uil uil-lock"></i>
                </div>

                <div class="input_box">
                    <input type="text" id="tarif_journalier" name="tarif_journalier" placeholder="Entrez le tarif journalier" required>
                    <i class="uil uil-lock"></i>
                </div>

                <label for="statut">Statut :</label>
                <select id="statut" name="statut" class="select" required>
                    <option value="" selected>Selectionner une option</option>
                    <option value="disponible">Disponible</option>
                    <option value="indisponible">Indisponible</option>
                </select>


                <button type="submit" class="button">Enregistrer</button>
            </form>
        </div>
    </div>
    <!-- <form method="POST" action="{{ route('vehicule.store') }}">
        @csrf

        <label for="type">Type de véhicule :</label>
        <input type="text" id="type" name="type" placeholder="Entrez le type de véhicule" required>

        <label for="date_achat">Date d'achat :</label>
        <input type="date" id="date_achat" name="date_achat" required>

        <label for="km_par_defaut">Kilométrage par défaut :</label>
        <input type="number" id="km_par_defaut" name="km_par_defaut" placeholder="Entrez le kilométrage par défaut" required>

        <label for="matricule">Matricule :</label>
        <input type="text" id="matricule" name="matricule" placeholder="Entrez le matricule" required>

        <label for="statut">Statut :</label>
        <select id="statut" name="statut" required>
            <option value="en panne">En panne</option>
            <option value="en marche">En marche</option>
        </select>

        <button type="submit">Enregistrer</button>
    </form>
 -->



</body>

</html>