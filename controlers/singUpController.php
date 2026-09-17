<?php

require "../conexion.php";

$usuario = $_POST["usuario"];
$password = $_POST["password"];
$rol = $_POST["rol"];

if ($usuario == "" || $password == "" || $rol == "") {

    echo "Los campos no deben estar vacíos";

} else {

    $hashContrasenia = password_hash($password, PASSWORD_DEFAULT);

    $consulta = $conexion->prepare(
        "INSERT INTO usuarios (usuario, contrasenia, rol) 
        VALUES (:usuario, :contrasenia, :rol)"
    );

    $consulta->execute([
        ":usuario" => $usuario,
        ":contrasenia" => $hashContrasenia,
        ":rol" => $rol
    ]);

    header("Location: ../index.php");
    exit();
}

?>