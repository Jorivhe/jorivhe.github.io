 <?php
  $nombre = $_POST['nombre'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
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

  <link rel="stylesheet" href="css/styles.css">

  <title>Enviado</title>
</head>

<body>
  <div class="container">
    <form action="index.html" class="text-center mt-5">
      <div class="container p-3 my-3 bg-dark text-white">
        <b>Nombre:</b> <?php echo $nombre;?>
        <br>
        <b>Asunto:</b> <?php echo $asunto ?>
        <br>
        <b>Mensaje:</b> <?php echo $mensaje ?>
      </div>
      <button type="submit" class="btn btn-primary">Volver</button>
    </form>
  </div>
</body>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Prueba Técnica Unipanamericana -
    <a href="#" class="text-primary"> Jorge Iván Hernández Hernández</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>