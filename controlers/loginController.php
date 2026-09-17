<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require "../conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password']; 
$rol = $_POST['rol'];

$stmt = $conexion->prepare(
    'SELECT * FROM usuarios WHERE usuario = ? '
);
$stmt->execute([$usuario]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user["contrasenia"])){
    $_SESSION["usuario"] = $user["usuario"];
    $_SESSION["rol"] = $user["rol"];
    header("Location: index.php"); 
    exit();
}
else{
    header("Location: ../login.php");
    exit();
}
?>
