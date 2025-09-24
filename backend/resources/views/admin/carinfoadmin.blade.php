<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>carinfoadmin</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
  </head>
  <style></style>
  <body>
    <main>
      <div class="container">
        <button
          class="testbtn"
          style="
            border: none;
            border-radius: 30%;
            padding: 10px;
            background-color: #fffb00;
            position: fixed;
            right: 10%;
            top: 5%;
          "
        >
          <i class="fa-solid fa-hand-point-right"></i>
        </button>
        <div class="hhh">
          <div style="display: inline-block" class="container">
            <h1 style="color: aliceblue; font-size: 40px">ShowCase</h1>
            <div class="conti">
              <div class="img">
                <div
                  id="carouselExampleFade"
                  class="carousel slide carousel-fade"
                >
                  <div class="carousel-inner">
                    @for ($i = 1; $i <= 3; $i++)
                      <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                        @if ($i === 1)
                          <img src="{{asset('cars/' . "$car->id/" . "$car->photo" . ".jpg")}}" alt="main-car" />
                        @else
                          <img src="{{asset('cars/' . "$car->id/" . "$car->photo" . ".$i" . ".jpg")}}" alt="main-car" />
                        @endif
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
          <div style="display: inline-block" class="container">
            <h1 style="color: aliceblue; font-size: 40px">Car features</h1>
            <div class="carfeat">
              <ul class="ul">
                <li><strong>brand:</strong> <span>{{$car->model->brand->brandName}}</span></li>
                <li><strong>Model:</strong> <span>{{$car->model->modelName}}</span></li>
                <li><strong>Motor:</strong> <span>{{$car->motor}}</span></li>
                <li><strong>Energie:</strong> <span>{{$car->energy}}</span></li>
                <li><strong>Box:</strong> <span>{{$car->box}}</span></li>
                <li><strong>Kilometrage:</strong> <span>{{$car->kilometrage}}</span></li>
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
        <div
          class="container"
          style="
            border-radius: 20px;
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
      </div>
    </main>
  </body>

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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{asset('js/admin.js')}}"></script>
  <script>
    document.querySelectorAll(".testbtn").forEach((button) => {
      button.addEventListener("click", async () => {
        const { value: text } = await Swal.fire({
          toast: true,
          title: "Send a message to seller",
          input: "textarea",
          inputLabel: "Message",
          inputPlaceholder: "Type your message...",
          showCancelButton: true,
        });

        if (text) {
          // Save the message to localStorage
          localStorage.setItem("sellerMessage", text);

          Swal.fire({
            toast: true,
            icon: "success",
            title: "Message sended",
          });
        }
      });
    });
  </script>
</html>
