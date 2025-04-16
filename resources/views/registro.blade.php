<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redsocial</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"><script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>    

</head>
<body class="bg-dark">
  <div class="row">
    <div class="col-sm-6 mt-5 ">
        <img class="ml-5" src="{{asset('imgs/logored.png') }}" alt="">
    </div>
    <div class="col-sm-6 mt-5">
      <form action="#" class="form-control bg-dark">
        <div class="mb-3 col-sm-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
          </div>
          <div class="mb-3 col-sm-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input min="2" maxlength="100" type="nombre" class="form-control" id="nombre" placeholder="Usuario">
          </div>
          <div class="mb-3 col-sm-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="8 caracteres mínimo">
          </div>
          <div class="mb-3 col-sm-12">
            <input type="button" class="form-control bg-warning" id="registro" value="Registrarse">
          </div>
          <div class="mb-3 col-sm-12">
            <a class="nav-link text-primary" href="{{ route('inicio') }}">¿Ya tienes cuenta? Inicia sesión</a>
          </div>
</form>
    </div>

  </div>

</body>
</html>