<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture de réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #020102;
            margin: 0;
            padding: 0;
            background: url(images/mercedes.jpeg);
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        .boutton {
            background-color: #d90429;
            margin-top: 30px;
            width: 15%;
            text-align: center;
            padding: 10px ;
            border-radius: 10px;

        }
        .boutton1 {
            background-color: #020102;
            margin-top: 30px;
            width: 15%;
            text-align: center;
            padding: 10px ;
            border-radius: 10px;

        }
        .boutton2 {
            background-color: #d90429;
            margin-top: 30px;
            width: 20%;
            text-align: center;
            padding: 10px ;
            border-radius: 10px;

        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Facture de réservation</h1>
        @if ($reservation)
        <p><strong>Date de début:</strong> {{ $reservation->start_date }}</p>
        <p><strong>Date de fin:</strong> {{ $reservation->end_date }}</p>
        @if ($reservation->vehicle)
        <p><strong>Véhicule:</strong> {{ $reservation->vehicle->nom }}</p>
        <p><strong>Matricule:</strong> {{ $reservation->vehicle->matricule }}</p>
        <!-- Vérifiez si un chauffeur est associé au véhicule-->
        @if ($reservation->vehicle->chauffeur)
        <!-- <Lien vers les détails du chauffeur  -->
        <a class="boutton2" href="{{ route('chauffeur.show', ['chauffeur' => $reservation->vehicle->chauffeur->id]) }}">Détails chauffeur</a>
        @endif
        @endif
        @endif
        <!-- Ajoutez d'autres détails de la facture au besoin -->
        <p>Merci pour votre réservation!</p>
        @if ($reservation)
        <!-- Boutons de modification et de paiement de la réservation -->
        <a class="boutton1" href="{{ route('reservation.edit', ['id' => $reservation->id]) }}">Modifier</a>
        <a class="boutton" href="{{ route('reservation.pay', ['id' => $reservation->id]) }}">Payer</a>
        @endif
    </div>
</body>

</html>