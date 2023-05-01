<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 02</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="Ejercicio02.css">
</head>
<body>

  <div class="container-login">
    <div class="login">

      <form action="Ejercicio02.php" method="post">
        
        <h1>Datos de Usuario</h1>
        
        <div class="form-group mt-3">
          <label>Nombre y Apellido</label>
          <input
          name="usuario" 
          type="text" 
          class="form-control mt-1" 
          placeholder="Nombre del Usuario" 
          autocomplete="off"
          required>
        </div>

        <div class="form-group mt-3">
          <label>Dirección:</label>
          <input 
          name="direccion" 
          type="text" 
          class="form-control mt-1" 
          placeholder="Dirección del Usuario" 
          autocomplete="off"
          required>
        </div>

        <div class="form-group mt-3">
          <label>E-mail</label>
          <input 
          name="email" 
          type="email" 
          class="form-control mt-1" 
          placeholder="Correo electrónico" 
          autocomplete="off"
          required>
        </div>

        <div class="form-group mt-3">
          <label>Edad</label>
          <input 
          name="edad" 
          type="number" 
          class="form-control mt-1" 
          placeholder="18" 
          autocomplete="off"
          required>
        </div>

        <div class="form-group mt-3">
          <button type="submit" class="btn btn-outline-success col-12">Enviar</button>
          <button type="reset" class="btn btn-outline-danger col-12 mt-3">Limpiar</button>
        </div>

      </form>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>