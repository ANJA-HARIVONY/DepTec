<!DOCTYPE html>
<html>
<head>
    <title>DEPARTAMENTO TECNICO - CONEXXIA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    @yield('css')
</head>
<body>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Departamento Tecnico</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="{{ route('clientes.index') }}">Instalaciones</a>
                    </div>
                  </div>
                </div>
              </nav>
        @yield('content')
    </div>

    @yield('js')
</body>
</html>
