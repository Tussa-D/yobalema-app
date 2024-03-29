<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon site</title>
    <!-- Lien css -->
    <link rel="stylesheet" href="{{ asset('css/utilisateur.css') }}">
    <!-- Lie icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- Navbar -->
    <header>
        <!-- nav container -->
        <div class="nav container">
            <!-- menu icon -->
            <i class='bx bx-menu' id="menu-icon"></i>
            <a href="#" class="logo">Yoba<span>Lema</span></a>
            <!-- nav list -->
            <ul class="navbar">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#cars">Cars</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#parts">Pricing</a></li>
            </ul>
            <!-- search icon -->
            <a href="{{ route('reservations.create') }}" class="button">Reserver</a>
            <!-- <a href="{{ route('reservations.mesReservations') }}" class="button">Mes reservation</a> -->
            <!-- Search box -->
            <div class="search-box container">
                <input type="search" name="" id="" placeholder="search">

            </div>

        </div>
    </header>


    <!-- Home -->

    <section class="home" id="home">
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
                        <input type="checkbox" id="check">
                        <label for="check">Remember me</label>
                        <a href="#" class="forgot_pw">Forgot password ?</a>
                    </span>
                </div>

                <button type="submit" class="button">Login</button>

                <div class="login_signup">Already have an account ? <a href="{{ route('register') }}" id="signup">Signup</a></div>
            </form>
        </div>
    </section>

    <!-- Car section -->

    <section class="cars" id="cars">
        <div class="heading">
            <span>All cars</span>
            <h2>We have all types cars</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, commodi!</p>
        </div>

        <!-- Cars container -->

        <div class="cars-container container">
            <!-- box 1 -->
            <div class="box">
                <img src="{{ asset('img/car1.jpg') }}" alt="">
                <h2>Porsche car</h2>
            </div>

            <!-- box 2 -->
            <div class="box">
                <img src="{{ asset('img/car2.jpg') }}" alt="">
                <h2>Porsche car</h2>
            </div>

            <!-- box 3 -->
            <div class="box">
                <img src="{{ asset('img/car3.jpg') }}" alt="">
                <h2>Porsche car</h2>
            </div>

            <!-- box 4 -->
            <div class="box">
                <img src="{{ asset('img/car4.jpg') }}" alt="">
                <h2>Porsche car</h2>
            </div>

            <!-- box 5 -->
            <div class="box">
                <img src="{{ asset('img/car5.jpg') }}" alt="">
                <h2>Porsche car</h2>
            </div>

            <!-- box 6 -->
            <div class="box">
                <img src="{{ asset('img/car6.jpg') }}" alt="">
                <h2>Porsche car</h2>
            </div>
        </div>
    </section>

    <section class="about container" id="about">
        <div class="about-img">
            <img src="{{ asset('img/about.png') }}" alt="">
        </div>
        <div class="about-text">
            <span>A propos de nous</span>
            <h2> Des prix bas avec <br> des voitures de Qualité</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, nam.</p>

            <!-- About button -->
            <a href="#" class="btn">
                Apprendre plus
            </a>
        </div>
    </section>

    <!-- Part section -->
    <section class="parts" id="parts">
        <div class="heading">
            <span>What we offer</span>
            <h2>Our car is Always Excellent</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <!-- Part container -->

        <div class="parts-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="{{ asset('img/1.png') }}" alt="">
                <h3>Berline simple</h3>
                <span>30000 FCFA</span>
                <i class="bx bxs-star">(6 Reviews)</i>
                <a href="" class="btn">Reserver</a>
                <a href="" class="details">View Details</a>
            </div>

            <!-- Box 2 -->
            <div class="box">
                <img src="{{ asset('img/about.png') }}" alt="">
                <h3>Berline confort</h3>
                <span>50000 FCFA</span>
                <i class="bx bxs-star">(6 Reviews)</i>
                <a href="" class="btn">Reserver </a>
                <a href="" class="details">View Details</a>
            </div>

            <!-- Box 3 -->
            <div class="box">
                <img src="{{ asset('img/2.png') }}" alt="">
                <h3>SUV</h3>
                <span>60000 FCFA</span>
                <i class="bx bxs-star">(6 Reviews)</i>
                <a href="" class="btn">Reserver</a>
                <a href="" class="details">View Details</a>
            </div>


        </div>

    </section>





    <!-- Footer section -->
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Yoba<span>Lema</span></a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Pages</h3>
                <a href="#">Home</a>
                <a href="#">Cars</a>
                <a href="#">Parts</a>
                <a href="#">Sales</a>
            </div>
            <div class="footer-box">
                <h3>Legal</h3>
                <a href="#">Privacy</a>
                <a href="#">Refund Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <p>United States</p>
                <p>Senegal</p>
                <p>France</p>
                <a href="#">Cars</a>
                <a href="#">Pricing</a>
            </div>

        </div>

    </section>

    <!-- Copyright -->

    <div class="copyright">
        <p>&#169; PointCar All Right Reserved</p>
    </div>
    <!-- Link to js -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>