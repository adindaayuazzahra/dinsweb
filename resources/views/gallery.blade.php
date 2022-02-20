@extends('layout/mainuser')
@section('judul', 'ADINDA | GALLERY')
@section('css')
<style>
  .nav-masthead .gallery {
    border-color: #DDDDDD;
  }
  .judul h1 {
    font-family: 'Prata', serif;
    font-size: 35pt;
    margin-top: 6rem;
    text-align: center;
    padding-bottom: 1rem;
    border-bottom: 1px solid #DDDDDD;
  }
  .gallery{
    padding-top: 20px;
    padding-bottom: 40px;
  }
  .row {
    display: -ms-flexbox; 
    display: flex;
    -ms-flex-wrap: wrap; 
    flex-wrap: wrap;
    padding: 0 4px;
  }
  /* Create four equal columns that sits next to each other */
  .column {
    -ms-flex: 25%; 
    flex: 25%;
    max-width: 25%;
    padding: 0 11px;
  }
  .column img {
    margin-top: 1.6rem;
    vertical-align: middle;
    width: 100%;
  }
  /* Responsive layout - makes a two column-layout instead of four columns */
  @media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
    }
  }
  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column {
      -ms-flex: 100%;
      flex: 100%;
      max-width: 100%;
    }
  }
  /* lightbox */
  .gallery .lightbox img {
    width: 100%;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.3);
  }
  .gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
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
<!-- Gallery -->
<section class="gallery" id="gallery">
  <div class="container">
    
    <div data-aos="fade-down" class="row judul d-flex justify-content-center">
      <div class="col-md-4">
        <h1>Gallery</h1>
      </div>
    </div>
    
    <div class="row" > 

      {{-- kolom 1 --}}
      <div class="column">
        @foreach ($kolom1 as $kolom1)
        <a class="lightbox" href="{{asset('asset/img/gallery/'. $kolom1->foto )}}">
          <img   src="{{asset('asset/img/gallery/'. $kolom1->foto )}}" style="width:100%">
        </a>
        @endforeach
      </div>
      
      {{-- kolom 2 --}}
      <div class="column">
        @foreach ($kolom2 as $kolom2)
        <a class="lightbox" href="{{asset('asset/img/gallery/'. $kolom2->foto )}}">
          <img   src="{{asset('asset/img/gallery/'. $kolom2->foto )}}" style="width:100%">
        </a>
        @endforeach
      </div>  
      
      {{-- kolom 3 --}}
      <div class="column">
        @foreach ($kolom3 as $kolom3)
        <a class="lightbox" href="{{asset('asset/img/gallery/'. $kolom3->foto )}}">
          <img   src="{{asset('asset/img/gallery/'. $kolom3->foto )}}" style="width:100%">
        </a>
        @endforeach
      </div>
      
      {{-- kolom 4 --}}
      <div class="column">
        @foreach ($kolom4 as $kolom4)
        <a class="lightbox" href="{{asset('asset/img/gallery/'. $kolom4->foto )}}">
          <img  src="{{asset('asset/img/gallery/'. $kolom4->foto )}}" style="width:100%">
        </a>
        @endforeach
      </div>
      
    </div>

  </div>
</section>
<!-- end gallery -->

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