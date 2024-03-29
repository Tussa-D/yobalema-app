<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Chauffeur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .form_container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto 0;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="form_container">
    <div class="form login_form">
        <h1>Détails reservation</h1>
        <p><strong>Nom:</strong> {{ $chauffeur->nom }}</p>
        <p><strong>Prénom:</strong> {{ $chauffeur->prenom }}</p>
        <p><strong>Expérience:</strong> {{ $chauffeur->experience }}</p>
        
        <!-- Ajoutez d'autres détails du chauffeur au besoin -->

        <!-- Formulaire de notation -->
        <h2>Noter le Chauffeur</h2>
        <form action="{{ route('chauffeur.rate', ['chauffeur' => $chauffeur->id]) }}" method="POST">
            @csrf
            <div class="input_box">
                <label for="rating">Note :</label>
                <select name="rating" id="rating">
                    <option value="1">1 - Mauvais</option>
                    <option value="2">2 - Moyen</option>
                    <option value="3">3 - Bon</option>
                    <option value="4">4 - Très bon</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
            <button type="submit">Soumettre</button>
        </form>
    </div>
</div>
</body>
</html>
