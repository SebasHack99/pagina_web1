<?php

include("conexion.php");

if(isset($_POST['send'])) {
    if(
        strlen($_POST['name'])  >= 1 &&
        strlen($_POST['email'])  >= 1 &&
        strlen($_POST['service'])  >= 1 &&
        strlen($_POST['messaje'])  >= 1
    ) {
        $marca = trim($_POST['name']);
        $modelo = trim($_POST['email']);
        $color = trim($_POST['service']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos(nombres, correo, servicio, mensaje) 
        VALUES ('$name', '$email','$service', '$message')";
        $resultado = mysqli_query($conex, $consulta);
    } 
 }
?>

