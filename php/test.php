<?php
require ("php/header.php");
$sql="INSERT INTO users (ID, nombre, apellidos, email, pswd) VALUES ('6380d7a6ecc58', 'admin', 'root', 'admin@circuitcat.com', 'Laura1')";

if(mysqli_query($conn,$sql)){
    echo "Registro añadido correctamente 👏 <br>";
}else{
    mysqli_error();
}
?>