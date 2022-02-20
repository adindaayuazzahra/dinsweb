@extends('layout/mainuser')
@section('judul', 'ADINDA | HOME')
@section('css')
<style>
   .nav-masthead .home {
      border-color: #DDDDDD;
    }
    .jumbotron {
      background: url('asset/img/cover.jpeg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      text-align: center;
      position: relative;
    }
    .jumbotron::after{
      content: '';
      display: block;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.664);
      position: absolute;
      bottom: 0px;
    }
    .jumbotron .container{
      position: relative;
      z-index: 1;
    }
    h1 {
      font-family: 'Prata', serif;
      font-size: 70pt;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.8);
    }
    span {
      font-family: 'Roboto';
      font-weight: 500;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.8);
    }
    p {
      font-size: 23pt;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.8);
    }
    .btn-custom {
      background-color: #DDDDDD;
      border-radius: 50px;
      font-weight: 700;
    }
    .btn-custom:hover {
      box-shadow: inset 0 0 0 51px #acacac;
    }
    @media (max-width: 850px) {
      h1 {
        font-size: 28pt;
      }
      p {
        font-size: 15pt;
      }
      .display-5 {
        font-size: 16pt;
      }
    }
    @media (max-width: 360px){
      h1 {
        font-size: 23pt;
      }
      p {
        font-size: 12pt;
      }
    }
</style>
@endsection
@section('content')
<div class="jumbotron d-flex w-100 vh-100">
  <div class="container d-flex align-items-center justify-content-center flex-column mt-5">
    <h1 data-aos="fade-down-right">Hello, I'm Adinda</h1>
    <p class="display-5" data-aos="zoom-in-up" >Wellcome to my <span>Portofolio Website</span>!</p>
    <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <p data-aos="fade-up-left" data-aos-anchor-placement="bottom-bottom">I'm Beginner Front-End Web Developer and Amateur Photographer.</p>
      </div>
    </div>
    <a href="{{('/about')}}" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="btn btn-custom btn-lg text-black mt-5">See More About Me!</a>
    
  </div>
</div>

{{-- <iframe src="https://camerasim-web-assets.s3.amazonaws.com/embeddable-og-camerasim/index.html" frameborder="0" width="100%" height="700"></iframe> --}}


@endsection