@extends('layouts.dashboard')
@section('title','Add A Car')
@section('content')
<div class="container" data-aos-duration="1500" data-aos="fade-up" style="margin-top: 150px">
  <div class="caiin">
    <form action="{{route('store.car')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <h1 style="font-size: 45px">Add your car</h1>
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
      <select id="brand-input" name="brand" style="background-color: #4a359700; color: rgb(92, 97, 101)" required>
        <option value="" disabled selected>Select a car brand</option>
        @foreach ($brands as $brand)  
            <option value="{{$brand->id}}">{{$brand->brandName}}</option>
        @endforeach
    </select>
    
    <select id="model" name="model" style="background-color: #4a359700; color: rgb(92, 97, 101)" required disabled>
        <option value="" disabled selected>Select a car model</option>
    </select>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const brandSelect = document.getElementById('brand-input');
      const modelSelect = document.getElementById('model');
  
      brandSelect.addEventListener('change', function () {
          const brandId = this.value;
          modelSelect.innerHTML = '<option disabled selected>Loading...</option>';
          modelSelect.disabled = true;
  
          fetch(`/get-models/${brandId}`)
              .then(response => {
                  if (!response.ok) throw new Error('Network response was not ok');
                  return response.json();
              })
              .then(data => {
                  modelSelect.innerHTML = '<option value="" disabled selected>Select a car model</option>';
                  data.forEach(model => {
                      const option = new Option(model.modelName, model.id);
                      modelSelect.add(option);
                  });
                  modelSelect.disabled = false;
              })
              .catch(error => {
                  console.error('Error:', error);
                  modelSelect.innerHTML = '<option disabled selected>Error loading models</option>';
              });
      });
  });
  </script>
