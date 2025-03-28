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
          <select
            style="background-color: #4a359700; color: rgb(92, 97, 101)"
            name="wilaya"
            id="wilaya"
            placeholder="wilaya"
          >
            <option value="" disabled selected>Select a wilaya</option>
            <option value="1">Adrar</option>
            <option value="2">Chlef</option>
            <option value="3">Laghouat</option>
            <option value="4">Oum El Bouaghi</option>
            <option value="5">Batna</option>
            <option value="6">Béjaïa</option>
            <option value="7">Biskra</option>
            <option value="8">Béchar</option>
            <option value="9">Blida</option>
            <option value="10">Bouira</option>
            <option value="11">Tamanrasset</option>
            <option value="12">Tébessa</option>
            <option value="13">Tlemcen</option>
            <option value="14">Tiaret</option>
            <option value="15">Tizi Ouzou</option>
            <option value="16">Algiers</option>
            <option value="17">Djelfa</option>
            <option value="18">Jijel</option>
            <option value="19">Sétif</option>
            <option value="20">Saïda</option>
            <option value="21">Skikda</option>
            <option value="22">Sidi Bel Abbès</option>
            <option value="23">Annaba</option>
            <option value="24">Guelma</option>
            <option value="25">Constantine</option>
            <option value="26">Médéa</option>
            <option value="27">Mostaganem</option>
            <option value="28">M'Sila</option>
            <option value="29">Mascara</option>
            <option value="30">Ouargla</option>
            <option value="31">Oran</option>
            <option value="32">El Bayadh</option>
            <option value="33">Illizi</option>
            <option value="34">Bordj Bou Arréridj</option>
            <option value="35">Boumerdès</option>
            <option value="36">El Tarf</option>
            <option value="37">Tindouf</option>
            <option value="38">Tissemsilt</option>
            <option value="39">El Oued</option>
            <option value="40">Khenchela</option>
            <option value="41">Souk Ahras</option>
            <option value="42">Tipaza</option>
            <option value="43">Mila</option>
            <option value="44">Aïn Defla</option>
            <option value="45">Naâma</option>
            <option value="46">Aïn Témouchent</option>
            <option value="47">Ghardaïa</option>
            <option value="48">Relizane</option>
            <option value="49">El M'Ghair</option>
            <option value="50">El Menia</option>
            <option value="51">Ouled Djellal</option>
            <option value="52">Bordj Badji Mokhtar</option>
            <option value="53">Béni Abbès</option>
            <option value="54">Timimoun</option>
            <option value="55">Touggourt</option>
            <option value="56">Djanet</option>
            <option value="57">In Salah</option>
            <option value="58">In Guezzam</option>
          </select>
          <style>
             select option {
background-color: #010922; /* Background color for options */
color: #f7f7f7; /* Text color for options */
padding: 10px; /* Add padding to options */
}
          </style>
          <select
          style="background-color: #4a359700; color: rgb(92, 97, 101); "
            id="brand-input"
            name="brand"
          >
            <option value="" disabled selected>Select a car brand</option>
            <option value="mercedes">Mercedes</option>
            <option value="bmw">BMW</option>
            <option value="audi">Audi</option>
            <option value="astonmartin">Aston Martin</option>
            <option value="peugeot">Peugeot</option>
            <option value="volkswagen">Volkswagen</option>
            <option value="toyota">Toyota</option>
            <option value="ford">Ford</option>
            <option value="honda">Honda</option>
            <option value="nissan">Nissan</option>
            <option value="tesla">Tesla</option>
            <option value="chevrolet">Chevrolet</option>
            <option value="hyundai">Hyundai</option>
            <option value="kia">Kia</option>
            <option value="porsche">Porsche</option>
            <option value="ferrari">Ferrari</option>
            <option value="lamborghini">Lamborghini</option>
            <option value="jaguar">Jaguar</option>
            <option value="landrover">Land Rover</option>
            <option value="mazda">Mazda</option>
            <option value="subaru">Subaru</option>
          </select>

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
