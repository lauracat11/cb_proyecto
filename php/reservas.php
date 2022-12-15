<?php

require ("header.php");

$e = $_POST["e"];
$z = $_POST["z"];
$d = $_POST["d"];

$id = uniqid();

// $sql="INSERT INTO reserve (ID, servicio, zzone) VALUES ('$id', '$e', '$z', '$d')";

$consulta = "SELECT * FROM reserve WHERE servicio = '$e' AND zzone='$z' AND ddate='$d'";
$res = mysqli_query($conn, $consulta);

$err = "";

if (mysqli_num_rows($res)>0){
    $err = "<div id='alert'>La fecha seleccionada no esta disponible</div>";
    header("Location: ../reservaspruebas.php?err=$err");
}else{
    $sql = "INSERT INTO reserve (ID, servicio, zzone, ddate) VALUES ('$id', '$e', '$z', '$d')";

    if (mysqli_query($conn, $sql)){
        // echo "Se ha hecho la reserva 👏 <br>";
        header ("Location: ../muestrareserva.php");
    }else{
        echo "Fallo al ingreasar el registro en: " . $sql . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>