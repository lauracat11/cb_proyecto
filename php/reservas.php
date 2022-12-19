<?php

require ("header.php");

$z = $_POST["z"];
$d = $_POST["d"];
$id = uniqid();


$consulta = "SELECT * FROM reserve WHERE zzone='$z' AND ddate='$d'";
$res = mysqli_query($conn, $consulta);

$err = "";

if (mysqli_num_rows($res)>0){
    $err = "<div id='alert'>La fecha seleccionada no esta disponible</div>";
    header("Location: ../html/alquilarpaddock.html?err=$err");
}else{
    $sql = "INSERT INTO reserve (ID, zzone, ddate) VALUES ('$id', '$z', '$d')";

    if (mysqli_query($conn, $sql)){
        header ("Location: ../html/submit.html");
    }else{
        echo "Fallo al ingreasar el registro en: " . $sql . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>