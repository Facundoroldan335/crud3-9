<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require "../conexion.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../login.php");
    exit();
}

$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($usuario) || empty($password)) {
    die("Completá todos los campos");
}

$consulta = $conexion->prepare(
    "SELECT * FROM usuarios WHERE usuario = ?"
);

$consulta->execute([$usuario]);

$user = $consulta->fetch();

if ($user && password_verify($password, $user['contrasenia'])) {

    $_SESSION['usuario'] = $user['usuario'];
    $_SESSION['rol'] = $user['rol'];

    header("Location: ../index.php?inicio=ok");
    exit();

} else {

    header("Location: ../login.php?error=login");
    exit();

}
?>