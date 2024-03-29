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
                <li><a href="#parts">Tarif</a></li>
                <li><a href="#blog">Our Blog</a></li>
            </ul>
             <!-- search icon -->
             <a href="{{ route('reservations.create') }}" class="button">Reserver</a>
            <!-- Search box -->
             <div class="search-box container">
                <input type="search" name="" id="" placeholder="search">

             </div>
        
            </div>
    </header>