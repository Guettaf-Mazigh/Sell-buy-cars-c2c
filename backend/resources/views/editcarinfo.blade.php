<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>edit car info</title>
    <link rel="stylesheet" href="{{asset('css/semsar.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />

    <style>
      * {
        color: aliceblue;
      }
      h3 {
        margin: 20px;
      }
      .options label {
        margin: 5px;
        display: inline-block;
        border-radius: 15px;
        padding: 10px;
        background-color: rgba(0, 255, 255, 0.135);
      }
      input,
      select {
        background-color: rgba(240, 248, 255, 0);
        border: solid;
        border-color: aliceblue;
        border-radius: 20px;
        padding: 10px;
        margin: 10px;
        color: aliceblue;
      }
    </style>
  </head>
  <body>
    <div class="container ooo">
      <header>
        <div class="content">
          <h1 class="title"><a href="index.html">SemsaR</a></h1>
        </div>
        <div class="b ccc">
          <div>about</div>
          <div>search</div>
          <div>contact</div>
          <div>
            <a href="login.html" target="_blank">Login</a>
          </div>
        </div>
        <div class="barss">
          <i style="font-size: 25px" class="fa-solid fa-bars"></i>
        </div>
      </header>
    </div>
    <div class="container" data-aos-duration="1500" data-aos="fade-up">
      <div class="caiin">
         <form action="{{route('update.car')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{ $car->id }}">
      <h1 style="font-size: 45px">edit Car information</h1>
      <h3><i class="fa-solid fa-car"></i> About car</h3>
      <input
        type="number"
        name="year"
        id="year"
        placeholder="year"
        max="2025"
        min="1900"
        required
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
      

      <h3><i class="fa-solid fa-gear"></i> Motorisation</h3>
      <input type="text" id="motor" name="motor" placeholder="motor" />
      
      <select
      style="background-color: #4a359700; color: rgb(92, 97, 101)"
      name="energy"
      placeholder="Energy"
    >
      <option value="" disabled selected>Select car energy</option>
      <option value="gasoline">gasoline</option>
      <option value="diesel">diesel</option>
      <option value="GPL">GPL</option>
      <option value="electricity">electricity</option>
      <option value="hybrid">hybrid</option>
    </select>

      <select
      style="background-color: #4a359700; color: rgb(92, 97, 101)"
      name="box"
      placeholder="box"
    >
      <option value="" disabled selected>Select car box</option>
      <option value="automatic">Automatic</option>
      <option value="manual">manual</option>
      <option value="semi_automatic">Semi Auto</option>
    </select>

      

      <h3><i class="fa-solid fa-thumbtack"></i> Specifiction</h3>
      <input
        type="number"
        id="mileage"
        name="mileage"
        placeholder="mileage in 'KM'"
        required
      />
      <input
        type="text"
        id="color"
        name="color"
        placeholder="color"
        required
      />
      <div class="options">
        <label><input type="checkbox" name="options[]" value="Air Conditioning" /> Air Conditioning</label>
        <label><input type="checkbox" name="options[]" value="Power Windows" /> Power Windows</label>
        <label><input type="checkbox" name="options[]" value="Power Door Locks" /> Power Door Locks</label>
        <label><input type="checkbox" name="options[]" value="Keyless Entry" /> Keyless Entry</label>
        <label><input type="checkbox" name="options[]" value="Bluetooth Connectivity" /> Bluetooth Connectivity</label>
        <label><input type="checkbox" name="options[]" value="USB Ports" /> USB Ports</label>
        <label><input type="checkbox" name="options[]" value="Rearview Camera" /> Rearview Camera</label>
        <label><input type="checkbox" name="options[]" value="TPMS" /> Tire Pressure Monitoring System (TPMS)</label>
        <label><input type="checkbox" name="options[]" value="ABS" /> Anti-Lock Braking System (ABS)</label>
        <label><input type="checkbox" name="options[]" value="Airbags" /> Airbags (Front, Side, Curtain)</label>
        <label><input type="checkbox" name="options[]" value="ESC" /> Electronic Stability Control (ESC)</label>
        <label><input type="checkbox" name="options[]" value="Automatic Headlights" /> Automatic Headlights</label>
        <label><input type="checkbox" name="options[]" value="Cruise Control" /> Cruise Control</label>
        <label><input type="checkbox" name="options[]" value="Spare Tire" /> Spare Tire or Tire Repair Kit</label>
      </div>

      
      <br /><br />
      <div class="jjjjjjj">
        <div>
          <h3><i class="fa-solid fa-pen"></i> Description</h3>
          <textarea
            style="
              padding: 15px;
              resize: none;
              background-color: rgba(240, 248, 255, 0);
              border: solid 1px;
              border-radius: 4px;
              border-color: aliceblue;
              color: aliceblue;
            "
            name="description"
            id="description"
            cols="30"
            rows="10"
            placeholder="description"
          >
          </textarea
          >
        </div>
        <div>
          <h3><i class="fa-solid fa-sack-dollar"></i> Price</h3>
          <input
            type="number"
            name="price"
            id="price"
            placeholder="price in million"
          />
        </div>

        <div>
          <h3><i class="fa-solid fa-image"></i> Photos</h3>
          <br />
          <input
            type="file"
            name="photos[]"
            id="photos"
            accept="image/*"
            multiple
          />
        </div>
      </div>
      <input
        style="
          padding: 15px;
          color: aliceblue;
          background-color: rgba(0, 0, 0, 0);
          border: solid;
          border-radius: 20px;
          border-color: aliceblue;
        "
        type="submit"
        value="confirm"
      />
    </form>
      </div>
    </div>
    <main>
      <div class="background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </main>

    <footer>
      <div class="container">
        <div class="fot">
          <div class="Logo">
            <h2>SemsaR</h2>
            <h3 style="margin: 0px">
              SemsaR 2025<br />
              All Rights Reserved ©
            </h3>
          </div>
          <div class="about">
            <h2>About</h2>
            <p>About</p>
            <p>how it work</p>
            <p>privacy notice</p>
            <p>Contact us</p>
          </div>
          <div class="social">
            <h2>Socials</h2>
            <p>facebook</p>
            <p>Instagram</p>
            <p>X</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="{{asset('js/index.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
