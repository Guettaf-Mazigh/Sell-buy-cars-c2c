<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/modal.css')}}" />
    <!----===== Iconscout CSS ===== -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <!----======== CSS ======== -->
    <title>Admin Dashboard Panel</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="{{asset('images/logo.png')}}" alt="" />
        </div>
        <span class="logo_name">SemsaR-admin</span>
      </div>
      <div class="menu-items">
        <ul class="nav-links">
          <li>
            <a href="#">
              <i class="uil uil-estate"></i>
              <span class="link-name"
                ><button class="bsid" id="Dah">Dahsboard</button></span
              >
            </a>
          </li>
          <li>
            <a href="#all">
              <i class="uil uil-user-circle"></i>
              <span class="link-name"
                ><button class="bsid" id="alluser">all users</button></span
              >
            </a>
          </li>
          <li>
            <a href="#deleted">
              <i class="uil uil-multiply"></i>
              <span class="link-name"
                ><button class="bsid" id="deletedposts">
                  deleted posts
                </button></span
              >
            </a>
          </li>
          <li>
            <a href="#approved">
              <i class="uil uil-check"></i>
              <span class="link-name"
                ><button class="bsid" id="approvedposts">
                  approved posts
                </button></span
              >
            </a>
          </li>
          <li>
            <a href="#article">
              <i class="uil uil-clipboard-notes"></i>
              <span class="link-name">
                <button class="bsid" id="articles">Blog</button></span
              >
            </a>
          </li>

          <li>
            <a href="#addingcar">
              <i class="uil uil-car"></i>
              <span class="link-name"
                ><button class="bsid" id="addcar">Add brand/Modal</button></span
              >
            </a>
          </li>
        </ul>
        <ul class="logout-mode">
          <li>
            <a>
              <i class="uil uil-signout"></i>
              <form action="{{route('logout')}}" method="get">
                @csrf
                <span class="link-name"
                  ><button class="bsid" id="logout">Logout</button></span>
              </form>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <section id="dashboard" class="dashboard">
      <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
      </div>
      <div class="dash-content">
        <div class="overview">
          <div class="title">
            <i class="uil uil-tachometer-fast-alt"></i>
            <span class="text">Dashboard</span>
          </div>
          <div class="boxes">
            <div class="box box1">
              <i class="fa-solid fa-car"></i>
              <span class="text">Total Cars</span>
              <span class="number">{{$carCount}}</span>
            </div>
            <div class="box box2">
              <i class="fa-solid fa-note-sticky"></i>
              <span class="text">Total articles</span>
              <span class="number">20,120</span>
            </div>
            <div class="box box3">
              <i class="fa-solid fa-user"></i>
              <span class="text">Total semsars</span>
              <span class="number">{{$semsarCount}}</span>
            </div>
          </div>
        </div>
        <div class="activity">
          <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Recent posts</span>
          </div>
          <table class="activity-data">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>

                <th>vhicule</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pendingCars as $car)
                <tr>
                  <td>{{$car->car->id}}</td>
                  <td>{{$car->car->user->name}}</td>

                  <td>
                    <button
                      class="modal-open button"
                      data-modal="modal1"
                      aria-haspopup="true"
                    >
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </td>
                  <td>
                    <form action="{{route('admin.requests.accept',$car->id)}}" method="POST" style="display:inline;">
                      @csrf
                      <button type="submit" class="acs done">✔️</button>
                    </form>
                    <button class="reff not not">❌</button>
                  </td>
                </tr>
              @endforeach
            </tbody>

            <div class="modal-overlay" id="modal1-overlay">
              <div
                class="modal"
                id="modal1"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal1-title"
              >
                <div class="modal-header">
                  <h2 id="modal1-title">Accessible Modal Title</h2>
                  <button class="modal-close" aria-label="Close modal">
                    &times;
                  </button>
                </div>
                <div class="modal-content">
                  <iframe
                    src="carinfoadmin.html"
                    style="height: 100%; width: 100%"
                  ></iframe>
                </div>
              </div>
            </div>
          </table>
        </div>
      </div>
    </section>

    <section id="all-dashboard" class="dashboard">
      <div id="all" class="dash-content">
        <div class="activity">
          <div class="title">
            <i class="uil uil-user-circle"></i>
            <span class="text">All users</span>
          </div>
          <table class="activity-data">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Profile</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>
                  <button onclick="openModal({{$user->id}})" class="button">
                      <i class="fa-regular fa-eye"></i>
                  </button>
                </td>
                <form action="{{route('delete.user.account',$user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <td><button type="submit" class="reff not">delete account</button></td>
                </form>
              </tr>
            @endforeach
            <div class="modal-overlay" id="modal-overlay" style="display: none;">
                <div style="width: 95%;" class="modal" id="modal" role="dialog" aria-modal="true">
                    <div class="modal-header">
                        <h2>Informations utilisateur</h2>
                        <button class="modal-close" onclick="closeModal()" aria-label="Close modal">
                            &times;
                        </button>
                    </div>
                    <div class="modal-content">
                        <iframe id="user-iframe" style="height: 100%; width: 100%;" frameborder="0"></iframe>
                    </div>
                </div>
            </div>

          </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="deleted-dashboard" class="dashboard">
      <div id="deleted" class="dash-content">
        <div class="activity">
          <div class="title">
            <i class="uil uil-multiply"></i>
            <span class="text">deleted postes</span>
          </div>
          <table class="activity-data">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>

                <th>vhicule</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($rejectedCars as $car)
                <tr>
                  <td>{{ $car->car->id }}</td>
                  <td>{{ $car->car->user->name }}</td>
                  <td>
                    <button onclick="openModal({{ $car->car->id }})" class="button">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </td>
                  <form action="{{ route('back.post', $car->id) }}" method="post">
                    @csrf
                    <td><button class="acs">back</button></td>
                  </form>
                </tr>
                @endforeach

        <!-- Modal (une seule fois, en dehors de la boucle) -->
        <div class="modal-overlay" id="modal-overlay" style="display: none;">
          <div style="width: 95%;" class="modal" id="modal" role="dialog" aria-modal="true">
            <div class="modal-header">
              <h2>Informations voiture</h2>
              <button class="modal-close" onclick="closeModal()" aria-label="Close modal">
                &times;
              </button>
            </div>
            <div class="modal-content">
              <iframe id="car-iframe" style="height: 100%; width: 100%;" frameborder="0"></iframe>
            </div>
          </div>
        </div>

            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section id="approved-dashboard" class="dashboard">
      <div id="approved" class="dash-content">
        <div class="activity">
          <div class="title">
            <i class="uil uil-check"></i>
            <span class="text">approved postes</span>
          </div>
          <table class="activity-data">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>

                <th>vhicule</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($acceptedCars as $car)
              <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->car->user->name}}</td>

                <td>
                  <button onclick="openModal({{ $car->car->id }})" class="button">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                </td>
                <form action="{{route('delete.poste',$car->id)}}" method="post">
                  @csrf
                  <td><button class="reff not">delete</button></td>
                </form>
              </tr>
            @endforeach
               <div class="modal-overlay" id="modal-overlay" style="display: none;">
          <div style="width: 95%;" class="modal" id="modal" role="dialog" aria-modal="true">
            <div class="modal-header">
              <h2>Informations voiture</h2>
              <button class="modal-close" onclick="closeModal()" aria-label="Close modal">
                &times;
              </button>
            </div>
            <div class="modal-content">
              <iframe id="car-iframe" style="height: 100%; width: 100%;" frameborder="0"></iframe>
            </div>
          </div>
        </div>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="article-dashboard" class="dashboard">
      <div id="article" class="dash-content">
        <div style="overflow: scroll" class="activity">
          <div style="display: flex">
            <div style="font-size: 30px" class="title">
              <i class="uil uil-clipboard-notes"></i>
              <span class="text">articles</span>
            </div>
            <div style="font-size: 30px" class="title">
              <button
                class="modal-open button"
                data-modal="modal4"
                aria-haspopup="true"
                style="background-color: #0e4bf100; display: flex"
              >
                <i class="uil uil-pen"></i>
                <span class="text">Create article</span>
              </button>
            </div>
          </div>

          <div class="card">
            <div class="card-img-holder">
              <img
                src="https://images.unsplash.com/photo-1640102953836-5651f5d6b240?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1024&q=80"
                alt="Blog image"
              />
            </div>
            <h3 class="blog-title">Learn Microinteraction</h3>
            <span class="blog-time">Monday Jan 20, 2020</span>
            <p class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
              sagittis viverra turpis, non cursus ex accumsan at.
            </p>
            <div class="options">
              <button
                class="modal-open button"
                data-modal="modal2"
                aria-haspopup="true"
              >
                edit
              </button>

              <button class="btn reff not">delete</button>
            </div>
          </div>

          <div class="card">
            <div class="card-img-holder">
              <img
                src="https://images.unsplash.com/photo-1640102953836-5651f5d6b240?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1024&q=80"
                alt="Blog image"
              />
            </div>
            <h3 class="blog-title">Learn Microinteraction</h3>
            <span class="blog-time">Monday Jan 20, 2020</span>
            <p class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
              sagittis viverra turpis, non cursus ex accumsan at.
            </p>
            <div class="options">
              <button
                class="modal-open button"
                data-modal="modal2"
                aria-haspopup="true"
              >
                edit
              </button>

              <button class="btn reff not">delete</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-overlay" id="modal2-overlay">
        <div
          class="modal"
          id="modal2"
          role="dialog"
          aria-modal="true"
          aria-labelledby="modal2-title"
        >
          <div class="modal-header">
            <h2 id="modal2-title">Edit Article / User View</h2>
            <button class="modal-close" aria-label="Close modal">
              &times;
            </button>
          </div>
          <div style="display: flex" class="modal-content">
            <iframe
              src="{{route('edit.article')}}"
              style="display: inline-block; height: 100%; width: 100%"
            ></iframe>
            <iframe
              src="{{route('view.article')}}"
              style="display: inline-block; height: 100%; width: 100%"
            ></iframe>
          </div>
        </div>
      </div>

      <!-- create article popup -->

      <div class="modal-overlay" id="modal3-overlay">
        <div
          class="modal"
          id="modal3"
          role="dialog"
          aria-modal="true"
          aria-labelledby="modal3-title"
        >
          <div class="modal-header">
            <h2 id="modal3-title">Create Article</h2>
            <button class="modal-close" aria-label="Close modal">
              &times;
            </button>
          </div>

          <div style="display: flex" class="modal-content">
            <iframe
              src="{{route('edit.article')}}"
              style="display: inline-block; height: 100%; width: 100%"
            ></iframe>
            <iframe
              src="articleviewuser.html"
              style="display: inline-block; height: 100%; width: 100%"
            ></iframe>
          </div>
        </div>
      </div>

      <div class="modal-overlay" id="modal4-overlay">
        <div
          class="modal"
          id="modal4"
          role="dialog"
          aria-modal="true"
          aria-labelledby="modal4-title"
        >
          <div class="modal-header">
            <h2 id="modal4-title">Create Article / User View</h2>
            <button class="modal-close" aria-label="Close modal">
              &times;
            </button>
          </div>
          <div style="display: flex" class="modal-content">
            <iframe
              src="{{route('edit.article')}}"
              style="display: inline-block; height: 100%; width: 100%"
            ></iframe>
            <iframe
              src="{{route('view.article')}}"
              style="display: inline-block; height: 100%; width: 100%"
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- admin adding cars -->

    <section id="article-dashboard" class="dashboard">
      <div id="addingcar" class="dash-content">
        <div style="overflow: scroll" class="activity">
          <div class="title">
            <i class="uil uil-car"></i>
            <span class="text">Add New Modal</span>
          </div>
         <form id="formModal" action="{{route('store.modal')}}" method="post">
            @csrf
            <style>
              #brand,
              #model,
              select {
                border: solid;
                border-color: black;
                border-radius: 10px;
                border-width: 2px;
                padding: 10px;
                margin-bottom: 10px;
              }
            </style>

            <select style="width: 199.2px" id="brand-input" name="brand" required>
              <option value="" disabled selected>Select a car brand</option>
              @foreach ($brands as $brand)  
                <option value="{{$brand->id}}">{{$brand->brandName}}</option>
              @endforeach
            </select>
            <br />

            <input type="text" id="model" name="model" placeholder="model Name" />

            <br/>

            <input
          style="
            border: solid;
            padding: 5px;
            border-radius: 5px;
            background-color: #0e4bf1;
            color: aliceblue;
          "
          type="submit"
          value="Submit"
          class="submit"
        />
          </form>
        @if (session('modelsuccess'))
            <div style="color: green;">{{ session('modelsuccess') }}</div>
        @endif

        @if (session('modelerror'))
            <div style="color: red;">{{ session('modelerror') }}</div>
        @endif

          <div class="title">
            <i class="uil uil-car"></i>
            <span class="text">Add New Brand & Modal</span>
          </div>
      <form id="formBrand" action="{{route('store.brand.model')}}" method="POST">
        @csrf
        <style>
          #brand2,
          #model2 {
            border: solid;
            border-color: black;
            border-radius: 10px;
            border-width: 2px;
            padding: 10px;
            margin-bottom: 10px;
          }
        </style>

        <input type="text" id="brand2" name="brand" placeholder="Brand Name" required />
        <br />
        <input type="text" id="model2" name="model" placeholder="Model Name" required />
        <br />
        <input
          style="
            border: solid;
            padding: 5px;
            border-radius: 5px;
            background-color: #0e4bf1;
            color: aliceblue;
          "
          type="submit"
          value="Submit"
          class="submit"
        />
      </form>
      @if (session('brandsuccess'))
          <div style="color: green;">{{ session('brandsuccess') }}</div>
      @endif

      @if (session('branderror'))
          <div style="color: red;">{{ session('branderror') }}</div>
      @endif
        </div>
      </div>
    </section>

    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function openModal(userId) {
        const modalOverlay = document.getElementById('modal-overlay');
        const iframe = document.getElementById('user-iframe');
        iframe.src = `/semsarpage/${userId}`;
        modalOverlay.style.display = 'block';
      }

      function closeModal() {
        const modalOverlay = document.getElementById('modal-overlay');
        const iframe = document.getElementById('user-iframe');
        iframe.src = ''; // reset iframe
        modalOverlay.style.display = 'none';
      }
  </script>


  </body>
</html>
