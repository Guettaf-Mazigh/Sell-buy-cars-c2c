@extends('layouts.dashboard')
@section('title','Home')
@section('content')
<div class="container">
  <div class="cont">
    <div data-aos-duration="500" data-aos="fade-up" class="text">
      <p data-aos-duration="500" data-aos="fade-up" class="ddd">
        Find Your Perfect Car.
      </p>
      <div data-aos-duration="500" data-aos="fade-up" class="ffz">
        Looking for a vehicle? You're in the perfect spot
      </div>
      <div data-aos="fade-up" class="icons">
        <div data-aos-duration="500" data-aos="fade-up" class="buy">
          <a
            style="color: aliceblue"
            href="searchcar.html"
            target="_blank"
          >
            Explorer Cars</a
          >
        </div>
        <div data-aos-duration="500" data-aos="fade-up" class="sell">
          <a href="login.html" target="_blank">sell Cars</a>
        </div>
      </div>
    </div>
    <div data-aos="zoom-in" data-aos-duration="1000" class="img">
      <img src="{{asset('img/main-car.webp')}}" alt="main-car" />
    </div>
  </div>
</div>
<div class="container">
  <div class="carss">
    <h2
      data-aos-duration="500"
      data-aos="fade-up"
      style="margin: 50px 0px 50px 0px"
    >
      Browse by Brand
    </h2>
    <div class="carousel basic">
      <div class="group">
        <div class="card">A</div>
        <div class="card">B</div>
        <div class="card">C</div>
        <div class="card">A</div>
        <div class="card">B</div>
        <div class="card">C</div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2
    style="margin: 50px 0px 50px 0px; font-size: 50px; color: aliceblue"
    data-aos-duration="500"
    data-aos="fade-up"
    class="ffz"
  >
    Available Cars
  </h2>

  <div data-aos-duration="500" data-aos="fade-up" class="too">
    <div data-aos-duration="500" data-aos="fade-up" class="carcard">
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i>kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
      <div class="card-container">
        <img
          src="{{asset('img/main-car.webp')}}"
          alt="Car Image"
          style="width: 100%; border-radius: 0 0 5px 5px"
        />
        <h3>NameOfcar</h3>
        <p><i class="fa-solid fa-location-dot"></i> wilaya</p>
        <div class="khnatech">
          <span> <i class="fa-solid fa-road"></i> kilometrage</span>
          <span><i class="fa-solid fa-gauge-high"></i> Boite</span>
          <span><i class="fa-solid fa-gas-pump"></i> Energie</span>
          <span><i class="fa-solid fa-chair"></i> seats</span>
        </div>
        <div style="display: flex; justify-content: space-between">
          <p><i class="fa-solid fa-sack-dollar"></i> price</p>
          <button class="info-button">
            <a href="carinfo.html" target="_blank"
              ><i class="fa-solid fa-circle-info"></i> more info</a
            >
          </button>
        </div>
      </div>
    </div>

    <button class="shown" style="width: min-content">showmore</button>
  </div>
</div>

<div class="container">
  <div data-aos-duration="500" data-aos="fade-up" class="carss">
    <h2
      style="margin: 50px 0px 50px 0px"
      data-aos-duration="500"
      data-aos="fade-up"
    >
      Upcoming Cars & Events 🔥
    </h2>
    <div class="carousel basic">
      <div class="group">
        <div class="card">A</div>
        <div class="card">B</div>
        <div class="card">C</div>
        <div class="card">A</div>
        <div class="card">B</div>
        <div class="card">C</div>
      </div>
    </div>
  </div>
</div>
@endsection