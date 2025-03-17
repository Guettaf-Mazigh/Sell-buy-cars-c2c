@extends('layouts.dashboard')
@section('title','Find Your Car')
@section('content')
  <div class="container">
    <div class="carss">
      <h2 class="bro" data-aos-duration="500" data-aos="fade-up">
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
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="caiin">
        <form action="" method="post">
          <h3><i class="fa-solid fa-car"></i> About car</h3>
          <input
            type="number"
            name="year"
            id="year"
            placeholder="year"
            max="2025"
            min="1999"
          />
          <input
            type="number"
            name="wilaya"
            id="wilaya"
            placeholder="wilaya"
            max="58"
            min="1"
          />
          <input
            style="
              width: 100%;
              padding: 10px;
              margin: 10px 0;
              border: 1px solid #ccc;
              border-radius: 5px;
            "
            list="brand-list"
            id="brand-input"
            name="brand"
            placeholder="Enter car brand"
          />
          <datalist id="brand-list">
            <option value="mercedes"></option>
            <option value="bmw"></option>
            <option value="audi"></option>
            <option value="astonmartin"></option>
            <option value="peugeot"></option>
            <option value="volkswagen"></option>
            <option value="toyota"></option>
            <option value="ford"></option>
            <option value="honda"></option>
            <option value="nissan"></option>
            <option value="tesla"></option>
          </datalist>

          <input type="text" id="model" name="model" placeholder="model" />

          <br /><br />
          <input
            style="
              padding: 15px;
              color: aliceblue;
              background-color: rgb(0, 0, 0);
              border: solid;
              border-radius: 20px;
              border-color: aliceblue;
            "
            type="submit"
            value="confirm"
          />
        </form>
      </div>
    </aside>
  </div>
  <style>
    /* Sidebar Styles */
    .sidebar {
      width: 300px; /* Fixed width for the sidebar */
      border: solid;
      color: aliceblue;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      background-color: rgb(6, 22, 91, 80%);
      display: none;
      overflow: auto;

      height: 100%;
      border: none;
    }

    /* scrollbar */
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }

    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      -webkit-border-radius: 10px;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      -webkit-border-radius: 10px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.3);
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }

    ::-webkit-scrollbar-thumb:window-inactive {
      background: rgba(255, 255, 255, 0.3);
    }

    .sidebar h1 {
      margin-top: 0;
    }

    .sidebar input[type="text"],
    .sidebar input[type="number"],
    .sidebar input[type="file"],
    .sidebar select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .sidebar .options {
      display: flex;
      flex-direction: column;
    }

    .sidebar .options label {
      margin: 5px 0;
    }
  </style>

  <button
    style="
      height: 50px;
      width: 50px;
      color: #e8e8e8;
      border-radius: 50%;
      right: 50px;
      bottom: 50px;
      position: fixed;
      background-color: #4a3597;
      border: none;
    "
    class="filter1"
  >
    <i class="fa-solid fa-filter"></i>
  </button>

  <div class="container">
    <div
      style="
        display: flex;
        justify-content: space-between;
        align-items: center;
      "
      class="abcc"
    >
      <h2
        style="color: aliceblue"
        data-aos-duration="500"
        data-aos="fade-up"
        class="broo ffz"
      >
        Search Car
      </h2>
      <div>
        <input
          type="search"
          name="searchcar"
          id="searchcar"
          placeholder="search by name"
        />

        <button
          class="search"
          style="
            color: aliceblue;
            border: none;
            background-color: #4a359700;
          "
        >
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </div>

    <div data-aos-duration="500" data-aos="fade-up" class="too">
      <div data-aos-duration="500" data-aos="fade-up" class="carcard">
        <div class="card-container">
          <img
            src="img/main-car.webp"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3 id="nameofcar">NameOfcar</h3>
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
            src="img/main-car.webp"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3 id="nameofcar">NameOfcar</h3>
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
            src="img/main-car.webp"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3 id="nameofcar">NameOfcar</h3>
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
            src="img/main-car.webp"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3 id="nameofcar">NameOfcar</h3>
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
            src="img/main-car.webp"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3 id="nameofcar">NameOfcar</h3>
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
            src="img/main-car.webp"
            alt="Car Image"
            style="width: 100%; border-radius: 0 0 5px 5px"
          />
          <h3 id="nameofcar">NameOfcar</h3>
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
@endsection
