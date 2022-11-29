<?php
require ('header.php');
session_start(); // Empezamos 

$correo_admin = "admin@circuitcat.com";

$uemail = $_POST["uemail"];
$pswd = $_POST["pswd"];

$sql = "SELECT * FROM users WHERE email='$uemail' and pswd='$pswd'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);


// Validación que nos indica si hay o no resgistros en la tabla
// if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["ID"]. " - Name: " . $row["user"]. " - Contraseña: " . $row["pswd"]. "<br>";
//     }
//     } else {
//     echo "0 results";
//     }

$sql_admin = "SELECT * FROM users WHERE ID ='6380d7a6ecc58' AND pswd='$pswd' AND email='$uemail'";
$admin_res = mysqli_query($conn,$sql_admin);
$admin_count = mysqli_num_rows($admin_res);

if ($admin_count == 1){
   $count=2;
}

if($count == 1) {
    header("location: /cb_proyecto/index.html");
}if($count == 2){
   header("location: /cb_proyecto/admin.html");
}else {
   $err = "<div class='alert alert-danger'>Correo o contraseña no validos</div>";
   header("Location: ../login1.php?err=$err");
 }
mysqli_close($conn);
?>