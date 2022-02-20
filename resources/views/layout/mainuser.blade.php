<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Prata:regular" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Monoton:regular" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('asset/favicon.ico')}}"/>

    <!-- myCSS -->
    <link rel="stylesheet" href="{{asset('asset/css/baguetteBox.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/node_modules/aos/dist/aos.css')}}"/>
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
    <style>
      body {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        /* background-color: #30475E; */
        background-color: #222831;
        color: #DDDDDD;
      }
      .navbar-nav {
        font-family: 'Roboto';
        font-weight: 300;
        font-size: 13pt;
      }
      .navbar-brand {
        font-family: 'Monoton';
        font-size: 25pt;
      }
      .nav-masthead .nav-link {
        border: 0.10rem solid transparent;
        border-radius: 50px;
        margin-left: 0.5rem;
        padding: 0;
      }
      .nav-masthead .nav-link:hover,
      .nav-masthead .nav-link:focus {
          border-color: rgba(255, 255, 255, 0.438);
          transition: transform .3s ease-in-out, visibility .3s ease-in-out;
      }
      .warna {
        /* background-color: #222831; */
        background-color: #30475E;
      }
     
      @media (max-width: 991.98px) {
      .offcanvas-collapse {
        text-align: center;
        position: fixed;
        top: 74px; /* Height of navbar */
        bottom: 0;
        left: 100%;
        width: 100%;
        padding-right: 7rem;
        padding-left: 7rem;
        padding-top: 7rem;
        overflow-y: auto;
        visibility: hidden;
        background-color: #343a40d5;
        transition: transform .3s ease-in-out, visibility .3s ease-in-out;
      }
      .offcanvas-collapse ul li {
        font-size: 20pt;
        font-weight: 700;
        margin-bottom: 1rem;
      }
      .offcanvas-collapse.open {
        visibility: visible;
        transform: translateX(-100%);
      }
    }
    @media (max-width: 360px) {
      .offcanvas-collapse ul li {
        font-size: 15pt;
        font-weight: 600;
        margin-bottom: 0.7rem;
      }
      .offcanvas-collapse {
        top: 60px; /* Height of navbar */
        padding-right: 6rem;
        padding-left: 6rem;
        padding-top: 6rem;
      }
      .navbar-brand {
        font-family: 'Monoton';
        font-size: 17pt;
      }

    }
    </style>

    @yield('css')
    <title>@yield('judul')</title>
  </head>
  <body>
    {{-- navbar --}}

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" href="{{('/')}}">DIN'S - PORTO.</a>
        <button class="navbar-toggler border-0 p-1" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="nav-masthead navbar-collapse offcanvas-collapse justify-content-end" id="navbarsExampleDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active home" href="{{('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active gallery" href="{{('/gallery')}}">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active about" href="{{('/about')}}">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('content')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{asset('asset/node_modules/aos/dist/aos.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    
    <script>
      baguetteBox.run('.gallery');
      
      (function () {
        'use strict'
          document.querySelector('#navbarSideCollapse').addEventListener('click', function () {
          document.querySelector('.offcanvas-collapse').classList.toggle('open')
        })
      })()

      var nav = document.querySelector('nav');
      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 0) {
          nav.classList.add('warna', 'shadow');
        } else {
          nav.classList.remove('warna', 'shadow');
        }
      })

      AOS.init({
        duration: 1500,
        easing: 'ease-out-back',
      });

    </script>
  </body>
</html>