@extends('layouts.dashboard')
@section('title', 'Car Infos')

@section('content')

<div class="container ooo">
  <header>
    <div class="content">
      <h1 class="title"><a href="{{ url('/') }}">SemsaR</a></h1>
    </div>
    <div class="b">
      <div>about</div>
      <div>search</div>
      <div>contact</div>
      <div><a href="{{ url('login') }}">Login</a></div>
    </div>
    <div class="barss">
      <i style="font-size: 25px" class="fa-solid fa-bars"></i>
    </div>
  </header>
</div>

<main>
  <div class="container">
    {{-- Showcase --}}
    <div class="hhh">
      <div data-aos="fade-up" data-aos-duration="1500" class="container">
        <h1 style="color: aliceblue; font-size: 40px">ShowCase</h1>
        <div class="conti">
          <div data-aos="zoom-in" data-aos-duration="1000" class="img">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('img/main-car.webp') }}" alt="main-car">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/120.png') }}" alt="main-car">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/desktopBar3.webp') }}" alt="main-car">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" style="background-color: rgb(56, 0, 241); border-radius: 50%;"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" style="background-color: rgb(56, 0, 241); border-radius: 50%;"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      {{-- Car Features --}}
      <div data-aos="fade-up" data-aos-duration="1500" class="container">
        <h1 style="color: aliceblue; font-size: 40px">Car features</h1>
        <div data-aos="fade-up" data-aos-duration="1500" class="carfeat">
          <ul class="ul">
            <li><strong>Brand:</strong> <span>Renault</span></li>
            <li><strong>Model:</strong> <span>Clio</span></li>
            <li><strong>Motor:</strong> <span>1.2L</span></li>
            <li><strong>Energy:</strong> <span>Essence</span></li>
            <li><strong>Box:</strong> <span>Manuelle</span></li>
            <li><strong>Kilometrage:</strong> <span>30 000 km</span></li>
            <li><strong>Color:</strong> <span>Rouge</span></li>
            <li><strong>Wilaya:</strong> <span>Bouira</span></li>
            <li><strong>Price:</strong> <span>200 million</span></li>
            <li><strong>Year:</strong> <span>2020</span></li>
            <li><strong>Paper:</strong> <span>À jour</span></li>
            <li><strong>Options:</strong> <span>Climatisation, GPS</span></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="gridin">
      {{-- Description --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="container" style="border-radius: 20px; margin-bottom: 30px; padding: 40px; color: aliceblue; background-color: rgba(0, 255, 255, 0.064);">
      <h1 style="color: aliceblue; font-size: 40px">Description</h1>
      <div style="color: aliceblue; font-size: 20px" class="disc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi reiciendis in quam voluptatibus? Excepturi praesentium fuga mollitia ipsum aliquid vitae cum voluptate, debitis blanditiis delectus, temporibus quasi amet ratione enim.
      </div>
    </div>

    {{-- Contact --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="container" style="border-radius: 20px; padding: 40px; color: aliceblue; background-color: rgba(0, 255, 255, 0.064);">
      <h1 style="color: aliceblue; font-size: 40px">Contact</h1>
      <div class="contact">
        <p><i class="fa-solid fa-user"></i> SemsaRname
          <span><a href="{{ url('semsarpage') }}"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></span>
        </p>
        <p><i class="fa-solid fa-envelope"></i> email@example.com</p>
        <p><i class="fa-solid fa-phone"></i> 06 00 00 00 00</p>
        <p><i class="fa-solid fa-location-dot"></i> Adresse</p>
      </div>
    </div>
  </div>
    </div>
</main>

@endsection
