<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon site</title>
    <!-- Lien css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Lie icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body style="background-image: url('img/car1.png');">


    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- login formulaire -->

            <div class="form login_form">

                <form method="POST" action="{{ route('reservations.store') }}">
                    @csrf
                    <h2>Reservation vehicule</h2>
                    <br>
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="erreur">{{ session('error') }}</div>
                    <div class="input_box">
                        <label for="start_date">Date de début:</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>
                    <br>
                    <div class="input_box">
                        <label for="end_date">Date de fin:</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                    </div>
                    <br>
                    <div class="input_box">
                        <label for="vehicle_id">Véhicule:</label>
                        <select name="vehicle_id" id="vehicle_id" class="form-control" required>
                            <option value="">Sélectionner un véhicule</option>
                            @foreach ($vehicles as $vehicle)
                            <option value="{{ $vehicle->id }}">{{ $vehicle->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="button">Réserver</button>
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