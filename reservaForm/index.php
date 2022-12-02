<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <title>RESERVA | FORM</title>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="Logo" width="292" height="100" class="logo d-inline-block">
          </a>
        </div>
      </nav>

    <h1>Formulario Reserva</h1>
    <form action="../php/reserva.php" method="post">
        <label for="">ESPACIO PARA ALQUILAR</label>
        <select name="e">
            <option value="Paddock" selected>Paddock</option>
        </select>
        <br><br>
        <label for="">ZONA PARA ALQUILAR</label>
        <select name="z">
            <option value="Z1" selected>Z1</option>
            <option value="Z2">Z2</option>
            <option value="Z3">Z3</option>
            <option value="Completo">Completo</option>
        </select>
        <br><br>
        <label for="">SELECCIONA DIA</label>
        <input name="d" type="date">
        <br><br>
        <?php 
          if (isset($_GET['err'])){
            $err = $_GET['err'];
            if ($err!='') {
                echo $err; 
            }
          }
        ?>
        <br></br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>