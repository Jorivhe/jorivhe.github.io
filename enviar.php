 <?php
  $nombre = $_POST['nombre'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  echo "Nombre: ".$nombre."<br>";
  echo "Asunto: ".$asunto."<br>";
  echo "Mensaje: ".$mensaje."<br>";
  ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Enviado</title>
</head>

<body>
  <!-- <h1 class="text-center mt-5 display-4 text-primary">Prueba Tecnica Unipanamericana</h1> -->

  <form class="text-center mt-5">
    <div class="form-group">
      <label for="exampleInputEmail1">$nombre</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Asunto">
    </div>
    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
        placeholder="Descripción del Mensaje"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>