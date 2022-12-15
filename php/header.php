<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="circuit_barcelona";

//Creación de la conexión
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Validación de la conexión
if (!$conn){
    echo "Conexión fallida en: " . mysqli_connect_error($conn);
}//else{
//     echo "Conexión con exito 😎 <br>";
// }
?>