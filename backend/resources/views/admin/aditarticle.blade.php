<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>editaricle</title>
    <link rel="stylesheet" href="{{asset('css/semsar.css')}}" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <style>
      * {
        color: aliceblue;
      }
      input {
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
    <main>
      <div style="margin-bottom: 100px" class="container">
        <div style="margin-bottom: 100px" class="too">
          <div class="Article">
            <h2
              style="margin-bottom: 50px; font-size: 50px; color: aliceblue"
              class="ffz"
            >
              Edit Article
            </h2>
            <form id="myForm" action="" method="post">
              <input
                type="text"
                name="articletiltle"
                id="title"
                placeholder="title"
              />
              <textarea name="textarea" id="default" class="textarea"></textarea>
              <input id="submitButton" type="submit" value="submit" />
            </form>
            
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
  <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
