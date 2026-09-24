<?php
require "autenticar.php";

$error = $_GET["error"] ?? "";
?>
<?php require "header.php"; ?>

<section>
    <h2>Iniciar Sesión</h2>

    <?php if($error == "login"): ?>
        <p class="error">Usuario o contraseña incorrectos</p>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <label for="username_login">Usuario</label>
        <input type="text" name="username" id="username_login" required>

        <label for="contrasena_login">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena_login" required>

        <button type="submit">Ingresar</button>
    </form>
</section>

<?php require "footer.php"; ?>