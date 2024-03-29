<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body style="background-image: url('images/mercedes2.jpeg');">

    <header class="header">
            <nav class="nav">
                <a href="#" class="nav_logo">Yobalema</a>

                <ul class="nav_items">
                    <li class="nav_item">
                        <a href="#" class="nav_link">Home</a>
                        <a href="#" class="nav_link">Tarification</a>
                        <a href="#" class="nav_link">Vehicule</a>
                    </li>
                </ul>
                
                <a href="{{ route('login') }}" class="button">Login</a>
            </nav>
        </header>
        

  
            <br>
            <div class="form_container">
                
                <!-- login formulaire -->

                <div class="form login_form">
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2>Register</h2>
                        <br>

                        <div class="input_box">
                            <input id="nom" type="text" placeholder="Entrez votre nom" name="nom" value="{{ old('nom') }}" required autofocus>
                        </div>

                        <div class="input_box">
                            <input id="prenom" type="text" placeholder="Entrez votre prenom" name="prenom" value="{{ old('prenom') }}" required>
                        </div>

                        <div class="input_box">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Entrez votre email" required autofocus>
                            <i class="uil uil-envelope-alt"></i>
                        </div>

                        <div class="input_box">
                            <input id="password" type="password" name="password" placeholder="Entrez votre mot de passe" required>
                
                        </div>

                        <div class="input_box">
                            <input id="password_confirmation" type="password" placeholder="Confirmez votre mot de passe" name="password_confirmation" required>
                        </div>


                        <button type="submit" class="button">Register</button>

            
                    </form>
                </div>
            </div>
       

        <!-- <form method="POST" action="{{ route('register') }}">
        @csrf
            <div>
                <label for="nom">Nom</label>
                <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>
            </div>

            <div>
                <label for="prenom">Prenom</label>
                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required >
            </div>

            <div>
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form> -->
</body>
</html>