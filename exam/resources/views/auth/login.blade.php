<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>page de connexion</title>
</head>
<body style="background-image: url('images/mercedes.jpeg');">

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
            
            <a href="{{ route('register') }}" class="button">Register</a>
        </nav>
    </header>

    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- login formulaire -->

            <div class="form login_form">
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>Login</h2>
                    <div class="erreur">{{ session('error') }}</div>
                    <div class="input_box">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Entrez votre email" required autofocus>
                        <i class="uil uil-envelope-alt"></i>
                    </div>

                    <div class="input_box">
                        <input id="password" type="password" name="password" placeholder="Entrez votre mot de passe" required>
                        <i class="uil uil-lock"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox"  id="check">
                            <label for="check">Remember me</label>
                            <a href="#" class="forgot_pw">Forgot password ?</a>
                        </span>
                    </div>

                    <button type="submit" class="button">Login</button>

                    <div class="login_signup">Already have an account ? <a href="{{ route('register') }}" id="signup">Signup</a></div>
                </form>
            </div>
        </div>
    </section>
        
</body>
</html>