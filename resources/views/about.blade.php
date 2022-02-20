@extends('layout/mainuser')
@section('judul', 'ADINDA | ABOUT')
@section('css')
<style>
  .nav-masthead .about {
    border-color: rgb(255, 255, 255);
  }
  .judul h1 {
    font-family: 'Prata', serif;
    font-size: 35pt;
    margin-top: 7rem;
    text-align: center;
    padding-bottom: 0.3rem;
    border-bottom: 1px solid #DDDDDD;
  }
  .rounded-circle {
    background-color: #F05454;
    padding: 4px;
  }
  footer {
    /* background:#F05454; */
    background:#30475E;
  }
  .email {
    color: #DDDDDD;
    text-decoration: none;
    font-size: 16pt;
  }
  .email:hover {
    color: #DDDDDD;
    border-bottom: solid 5px;
  }
  .copyright {
    font-size: 10pt;
    color: rgba(255, 255, 255, 0.5)
  }
  .btn {
    border-radius: 50%;
  }
  @media screen and (max-width: 800px) {
    .judul h1 {
      font-size: 25pt;
    }  
  
  }
</style>
@endsection
@section('content')
<div class="container">
  <div data-aos="fade-down" class="row judul d-flex justify-content-center">
    <div class="col-md-4">
      <h1>About</h1>
    </div>
  </div>
  
  <div class="row d-flex justify-content-center mt-4">
    <div data-aos="fade-left" class="col-md-4">
      <img width="50%" height="100%" class=" rounded-circle mx-auto d-block" src="{{asset('asset/img/me.jpg')}}" alt="">
    </div>
  </div>

  <div class="row d-flex justify-content-center">
    <div class="col-md-5 d-flex align-items-center mt-4">
      <p data-aos="fade-right" class="fs-5" style="text-align: justify;">Hello, My name is Adinda Ayu Azzahra. I live in Jakarta, Indonesia. I currently studying for a banchelor's degree majoring Informatics Engineering at Pancasila University. Photography is my passion. I've been into photography since i graduated from high school. In my spare time I like to
        take pictures with my Sony A6000</p>
    </div>
  </div>
</div>


<footer class=" text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-1">
    <!-- Section: Social media -->
    <a class="email mb-3" href="mailto:adindaa48@gmail.com" title="Email me" rel="me" target="_blank">adindaa48@gmail.com</a>
    <section class="mb-1 mt-3">
      <!-- Instagram -->
      <a
        class="text-white btn btn-lg btn-floating m-1"
        style="background-color: #F05454;"
        href="https://www.instagram.com/adindayzhr/" target="_blank"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="text-white btn btn-lg btn-floating m-1"
        style="background-color: #F05454;"
        href="https://500px.com/p/adindayzhr?view=photos" target="_blank"
        role="button"
        ><i class="fab fa-500px"></i>
      </a>
      <!-- Github -->
      <a
        class="text-white btn btn-lg btn-floating m-1"
        style="background-color: #F05454;" target="_blank"
        href="https://github.com/adindaayuazzahra"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 copyright">
    © 2020 Copyright DIN'S-PORTO
  </div>
  <!-- Copyright -->
</footer>
@endsection