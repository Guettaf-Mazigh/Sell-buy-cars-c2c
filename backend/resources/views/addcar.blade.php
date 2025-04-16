@extends('layouts.dashboard')
@section('title','Add A Car')
@section('content')
<div class="container" data-aos-duration="1500" data-aos="fade-up">
  <div class="caiin">
    <form action="" method="post">
      <h1 style="font-size: 45px">Add your car</h1>
      <h3><i class="fa-solid fa-car"></i> About car</h3>
      <input
        type="number"
        name="year"
        id="year"
        placeholder="year"
        max="2025"
        min="1999"
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
      <select
        style="background-color: #4a359700; color: rgb(92, 97, 101)"
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

      <select
        type="text"
        id="model"
        name="model"
        style="background-color: #4a359700; color: rgb(92, 97, 101)"
        required
      >
        <option value="" disabled selected>Select a car model</option>
        <option value="mercedes">gle</option>
        <option value="bmw">207</option>
        <option value="audi">Audi</option>
        <option value="astonmartin">Aston Martin</option>
        <option value="peugeot">Peugeot</option>
        <option value="volkswagen">Volkswagen</option>
        <option value="toyota">Toyota</option>
        <option value="ford">Ford</option>
      </select>

      <h3><i class="fa-solid fa-gear"></i> Motorisation</h3>
      <input type="text" id="motor" name="motor" placeholder="motor" />

      <input
        list="energie-list"
        id="energie-input"
        name="energie"
        placeholder="energie"
        required
      />
      <datalist id="energie-list">
        <option value="gasoline"></option>
        <option value="diesel"></option>
        <option value="electric"></option>
      </datalist>

      <input
        list="box-list"
        id="box-input"
        name="box"
        placeholder="box"
        required
      />
      <datalist id="box-list">
        <option value="automatic"></option>
        <option value="manual"></option>
      </datalist>

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
      <input
        list="paper-list"
        id="paper-input"
        name="paper"
        placeholder="paper"
        required
      />
      <datalist id="paper-list">
        <option value="gray card"></option>
        <option value="yellow card"></option>
        <option value="licence"></option>
      </datalist>

      <input
        type="text"
        id="Cylinders"
        name="Cylinders"
        placeholder="Cylinders"
        required
      />
      <input
        type="number"
        id="seats"
        name="seats"
        placeholder="seats"
        required
      />
      <input
        type="number"
        id="doors"
        name="doors"
        placeholder="doors"
        required
      />

      <h3><i class="fa-solid fa-filter"></i> Options</h3>
      <!-- Essential Features -->
      <div class="options">
        <label><input type="checkbox" /> Air Conditioning</label>
        <label><input type="checkbox" /> Power Windows</label>
        <label><input type="checkbox" /> Power Door Locks</label>
        <label><input type="checkbox" /> Keyless Entry</label>
        <label><input type="checkbox" /> Bluetooth Connectivity</label>
        <label><input type="checkbox" /> USB Ports</label>
        <label><input type="checkbox" /> Rearview Camera</label>
        <label
          ><input type="checkbox" /> Tire Pressure Monitoring System
          (TPMS)</label
        >
        <label
          ><input type="checkbox" /> Anti-Lock Braking System (ABS)</label
        >
        <label
          ><input type="checkbox" /> Airbags (Front, Side, Curtain)</label
        >
        <label
          ><input type="checkbox" /> Electronic Stability Control
          (ESC)</label
        >
        <label><input type="checkbox" /> Automatic Headlights</label>
        <label><input type="checkbox" /> Cruise Control</label>
        <label
          ><input type="checkbox" /> Spare Tire or Tire Repair Kit</label
        >
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
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit sed obcaecati autem praesentium earum. Est quae atque at eveniet voluptatibus accusantium nulla, repellendus quidem iusto aperiam dolore, placeat fuga laudantium!</textarea
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
            name="photo"
            id="photo"
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
