<?php
require ('header.php');
session_start(); // Empezamos 

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

if($count == 1) {
    header("location: /cb_proyecto/index.html");
 }else {
    echo "Your Login Name or Password is invalid";
 }
mysqli_close($conn);
?>