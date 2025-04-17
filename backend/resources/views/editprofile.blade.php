@extends('layouts.dashboard')
@section('title','Edit Your Profile')
@section('content')
<div class="container">
  <div class="sellersection">
    <h2
      style="font-size: 50px; margin: 40px 0px 40px 0px; color: aliceblue"
      data-aos-duration="1500"
      data-aos="fade-up"
      class="ffz"
    >
      personl information
    </h2>
    <form
      data-aos-duration="1500"
      data-aos="fade-up"
      action="{{route('update.profile')}}"
      method="POST"
    >
    @csrf
    @method('PUT')
      <div>
        <h3 style="color: aliceblue">personl information</h3>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="full name"
          value="{{$infos->name}}"
        />
        <input

          list="gender-list"
          id="gender-input"

          name="gender"
          placeholder="gender"
          value="{{$infos->gender}}"
          required
        />
        <datalist id="gender-list" name="gender">
          <option value="male"></option>
          <option value="female"></option>
        </datalist>
        <input

          type="number"
          name="wilaya"
          id="wilaya"
          placeholder="wilaya"
          value="{{$infos->wilaya}}"
          min="1"
          max="59"
        />
        <input

          type="text"
          name="phone"
          id="phone"
          placeholder="phone"
          value="{{$infos->phoneNumber}}"
          maxlength="10"
          minlength="10"
        />
        <input
          type="text"
          name="address"
          value="{{$infos->address}}"
          placeholder="address"
        />
      </div>
      <div>
        <h3  style="color: aliceblue">Email & Password</h3>
        <input

          type="email"
          name="email"
          id="email"
          placeholder="{{$infos->email}}"
          disabled
        />

        <input

                type="password"
                name="password"
                id="password"
                placeholder="password"
                disabled
              />
              <input

                type="password"
                name="password_confirmation"
                id="passwordconf"
                placeholder="confirm password"
                disabled
              />

        <span
          class="enablee"
          style="
            cursor: pointer;
            border: none;
            color: aliceblue;
            background-color: rgba(240, 248, 255, 0);
          "
        >
          <i class="fa-solid fa-pen"></i>
        </span>
      </div>
      <input

        type="submit"
        value="save"
      />
    </form>
    <h3></h3>
    <h3></h3>
    <h3></h3>
    <h3></h3>
  </div>
</div>

<div class="container">
  <h2
    style="margin: 40px 0px 40px 0px; font-size: 50px; color: aliceblue"
    data-aos-duration="1500"
    data-aos="fade-up"
    class="ffz"
  >
    Publiched Cars
  </h2>

  <div  class="too">
    <div class="carcard">
      @foreach ($cars as $car)
        <div class="card-container">
          <img
            src="{{asset('img/main-car.webp')}}"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3>{{$car->model->modelName}}</h3>
          <p><i class="fa-solid fa-location-dot"></i> {{$infos->wilaya}}</p>
          <div class="khnatech">
            <span> <i class="fa-solid fa-road"></i> {{$car->kilometrage}} Km</span>
            <span><i class="fa-solid fa-gauge-high"></i> {{$car->box}}</span>
            <span><i class="fa-solid fa-gas-pump"></i> {{$car->energy}}</span>
            <span><i class="fa-solid fa-chair"></i> {{$car->year}}</span>
          </div>
          <div
            style="
              display: flex;
              justify-content: space-between;
              align-items: center;
            "
          >
            <p><i class="fa-solid fa-sack-dollar"></i> {{$car->price}} millions</p>
            <div>
              <button class="info-button">
                <a href="editcarinfo.html" target="_blank"
                  ><i class="fa-solid fa-trash" style="color: aliceblue"></i>
                </a>
              </button>
              <button class="info-button">
                <a href="editcarinfo.html" target="_blank"
                  ><i
                    class="fa-regular fa-pen-to-square"
                    style="color: aliceblue"
                  ></i>
                </a>
              </button>
              <button class="info-button">
                <a href="{{route('car.info',$car->id)}}" target="_blank"
                  ><i class="fa-regular fa-eye"></i>
                </a>
              </button>
            </div>
          </div>
        </div>
      @endforeach

    </div>
    <button class="shown" style="width: min-content">showmore</button>
  </div>
</div>

<div data-aos-duration="1500" data-aos="fade-up" class="container">
  <div class="carss">
    <h2
      style="padding: 50px 0px 50px 0px"
      data-aos-duration="1500"
      data-aos="fade-up"
    >
      <a href="blogview.html">Upcoming Cars & Events 🔥</a>
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
