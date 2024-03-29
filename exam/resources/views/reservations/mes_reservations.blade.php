<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if($reservations->isNotEmpty())
    <h2>Mes Réservations</h2>
    <ul>
        @foreach($reservations as $reservation)
        <li>
            Date de réservation : {{ $reservation->date_reservation }}<br>
            Autres détails de la réservation...
        </li>
        @endforeach
    </ul>
    @else
    <p>Aucune réservation trouvée pour cet utilisateur.</p>
    @endif

</body>

</html>