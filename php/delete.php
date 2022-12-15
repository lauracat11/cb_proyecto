<?php
require ("header.php");
// Eliminar datos

$sql="DELETE FROM reserve";

if (mysqli_query($conn, $sql)){
    echo "Eliminado correctamente 😶 <br>";
}else{
    echo "Fallo al eliminar el registro en: " . $sql . mysqli_error($conn);
}
mysqli_close($conn);
?>