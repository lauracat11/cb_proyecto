<?php
require ("header.php");

$uname = $_POST["uname"];
$auname = $_POST["auname"];
$uemail = $_POST["uemail"];
$pswd = $_POST["pswd"];

$id = uniqid();
// Insertar datos en la base de datos

$sql="INSERT INTO users (ID, nombre, apellidos, email, pswd) VALUES ('$id', '$uname', '$auname', '$uemail', '$pswd')";

// Hace una consulta y mira si existe el correo que se a introducido en el registro.
// $consulta = mysqli_query($conn, "SELECT * FROM users WHERE email = '$uemail'");

$consulta = "SELECT * FROM users WHERE email = '$uemail'";
$res = mysqli_query($conn, $consulta);

$err = "";
global $err;

if (mysqli_num_rows($res)>0){
    $err = "Usuario existente";
    header("Location: ../registro1.php?err=$err");
}else{
    $sql="INSERT INTO users (ID, nombre, apellidos, email, pswd) VALUES ('$id', '$uname', '$auname', '$uemail', '$pswd')";

    if (mysqli_query($conn, $sql)){
        echo "Registro añadido correctamente 👏 <br>";
    }else{
        echo "Fallo al ingreasar el registro en: " . $sql . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>