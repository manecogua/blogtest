<!doctype html>
<html lang="en">
  <head>
    <title>Blog - Prueba Técnica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
            <div class="container-fluid bg-dark ml-4 mr-4">
              <div class="row">
                <h1 class="text-light">Prueba Técnica</h1>
                <div class="row">
                  <ul class="nav justify-content-center|justify-content-end">
                      <li class="nav-item">
                          <a class="nav-link active" href="{{ url('/') }}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/posts') }}">Posts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('api/documentation') }}" target="_blank">Swagger</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
              <div class="container">
                    @yield('content')
              </div>
          </div>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>