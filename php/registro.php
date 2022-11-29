<?php
require ("header.php");

$uname = $_POST["uname"];
$auname = $_POST["auname"];
$uemail = $_POST["uemail"];
$pswd = $_POST["pswd"];

$id = uniqid();
// Insertar datos en la base de datos

$sql="INSERT INTO users (ID, nombre, apellidos, email, pswd) VALUES ('$id', '$uname', '$auname', '$uemail', '$pswd')";

if (mysqli_query($conn, $sql)){
    echo "Registro añadido correctamente 👏 <br>";
}else{
    echo "Fallo al ingreasar el registro en: " . $sql . mysqli_error($conn);
}

mysqli_close($conn);
?>