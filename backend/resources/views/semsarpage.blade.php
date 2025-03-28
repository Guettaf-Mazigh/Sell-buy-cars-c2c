@extends('layouts.dashboard')
@section('title','Semsar Page')
@section('content')
<div class="container">
  <div class="semsar">
    <h2
      style="font-size: 50px; color: aliceblue"
      data-aos-duration="1500"
      data-aos="fade-up"
      class="ffz"
    >
      semsar information
    </h2>
    <form action="" method="post">
      <div>
        <input
          data-aos-duration="1500"
          data-aos="fade-up"
          type="text"
          name="name"
          id="name"
          placeholder="{{$semsarInfos->name}}"
          disabled
        />
        <input
          data-aos-duration="1500"
          data-aos="fade-up"
          type="text"
          name="gender"
          id="gender"
          placeholder="{{$semsarInfos->gender}}"
          disabled
        />
        <input
          data-aos-duration="1500"
          data-aos="fade-up"
          type="number"
          name="wilaya"
          id="wilaya"
          placeholder="{{$semsarInfos->wilaya}}"
          min="1"
          max="59"
          disabled
        />
      </div>
      <div>
        <input
          data-aos-duration="1500"
          data-aos="fade-up"
          type="email"
          name="email"
          id="email"
          placeholder="{{$semsarInfos->email}}"
          disabled
        />
        <input
          data-aos-duration="1500"
          data-aos="fade-up"
          type="number"
          name=""
          id="phone"
          placeholder="{{$semsarInfos->phoneNumber}}"
          disabled
        />
      </div>
    </form>
  </div>
</div>

<div class="container">
  <h2
    style="font-size: 50px; color: aliceblue"
    data-aos-duration="1500"
    data-aos="fade-up"
    class="ffz"
  >
    Listing Cars
  </h2>

  <div data-aos-duration="1500" data-aos="fade-up" class="too">
    <div data-aos-duration="1500" data-aos="fade-up" class="carcard">
      @foreach ($semsarCars as $semsarCar)
        <div class="card-container">
          <img
            src="img/main-car.webp"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3>{{$semsarCar->model->modelName}}</h3>
          <p><i class="fa-solid fa-location-dot"></i> {{$semsarCar->user->wilaya}}</p>
          <div class="khnatech">
            <span> <i class="fa-solid fa-road"></i> {{$semsarCar->kilometrage}} Km</span>
            <span><i class="fa-solid fa-gauge-high"></i> {{$semsarCar->box}}</span>
            <span><i class="fa-solid fa-gas-pump"></i> {{$semsarCar->energy}}</span>
            <span><i class="fa-solid fa-chair"></i> {{$semsarCar->year}}</span>
          </div>
          <div style="display: flex; justify-content: space-between">
            <p><i class="fa-solid fa-sack-dollar"></i> {{$semsarCar->price}} millions</p>
            <button class="info-button">
              <a href="{{route('car.info',$semsarCar->id)}}" target="_blank"
                ><i class="fa-solid fa-circle-info"></i> more info</a
              >
            </button>
          </div>
        </div>
      @endforeach
    </div>
    <button class="shown" style="width: min-content">showmore</button>
  </div>
</div>
@endsection