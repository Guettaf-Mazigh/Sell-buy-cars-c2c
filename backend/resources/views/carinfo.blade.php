@extends('layouts.dashboard')
@section('title','Car Info')
@section('content')
<div class="container">
  <div class="hhh">
    <div data-aos="fade-up" data-aos-duration="1500" class="container">
      <h1 style="color: aliceblue; font-size: 40px">ShowCase</h1>
      <div class="conti">
        <div data-aos="zoom-in" data-aos-duration="1000" class="img">
          <div
            id="carouselExampleFade"
            class="carousel slide carousel-fade"
          >
            <div class="carousel-inner">
              @for ($i = 1; $i <= 3; $i++)
                <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                  @php
                    $fileName = $i === 1
                      ? asset('cars/' . $car->id . '/' . $car->photo . '.jpg')
                      : asset('cars/' . $car->id . '/' . $car->photo . '.' . $i . '.jpg');
                  @endphp

                  <img src="{{ $fileName }}" alt="car image {{ $i }}" />
                </div>
              @endfor
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                style="
                  background-color: rgb(56, 0, 241);
                  border-radius: 50%;
                "
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                style="
                  background-color: rgb(56, 0, 241);
                  border-radius: 50%;
                "
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-duration="1500" class="container">
      <h1 style="color: aliceblue; font-size: 40px">Car features</h1>
      <div data-aos="fade-up" data-aos-duration="1500" class="carfeat">
        <ul class="ul">
          <li><strong>brand:</strong> <span>{{$car->model->brand->brandName}}</span></li>
          <li><strong>Model:</strong> <span>{{$car->model->modelName}}</span></li>
          <li><strong>Motor:</strong> <span>{{$car->motor}} L</span></li>
          <li><strong>Energie:</strong> <span>{{$car->energy}}</span></li>
          <li><strong>Box:</strong> <span>{{$car->box}}</span></li>
          <li><strong>Kilometrage:</strong> <span>{{$car->Kilometrage}} km</span></li>
          <li><strong>Color:</strong> <span>{{$car->Color}}</span></li>
          <li><strong>wilaya:</strong> <span>{{$car->user->wilaya}}</span></li>
          <li>
            <strong>Price:</strong> <span>{{$car->price}} </span> <span>million</span>
          </li>
          <li><strong>year:</strong> <span>{{$car->year}}</span></li>
          <li><strong>Paper:</strong> <span>À jour</span></li>
          <li>
            <strong>Options:</strong> <span>Climatisation, GPS</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div data-aos="fade-up" data-aos-duration="1500" class="gridin">
    <div
      class="container"
      style="
        display: inline-block;
        border-radius: 20px;
        margin-bottom: 30px;
        padding: 40px;
        color: aliceblue;
        background-color: rgba(0, 255, 255, 0.064);
      "
    >
      <h1 style="color: aliceblue; font-size: 40px">description</h1>
      <div style="color: aliceblue; font-size: 20px" class="disc">
        {{$car->description}}
      </div>
    </div>
    <div
      class="container"
      style="
        display: inline-block;
        border-radius: 20px;
        padding: 40px;
        color: aliceblue;
        background-color: rgba(0, 255, 255, 0.064);
      "
    >
      <h1 style="color: aliceblue; font-size: 40px">contact</h1>
      <div class="contact">
        <p>
          <i class="fa-solid fa-user"></i> {{$car->user->name}}
          <span
            ><a href="{{route('semsar.page',$car->user->id)}}"
              ><i class="fa-solid fa-arrow-up-right-from-square"></i></a
          ></span>
        </p>
        <p><i class="fa-solid fa-envelope"></i> {{$car->user->email}}</p>
        <p><i class="fa-solid fa-phone"></i> {{$car->user->phoneNumber}}</p>
        <p><i class="fa-solid fa-location-dot"></i> {{$car->user->address}}</p>
      </div>
    </div>
  </div>
</div>
@endsection