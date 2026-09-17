<?php 
    require "partials/header.php";
    require "partials/footer.php";
?>
<body>
    <div class="form">
        <form action="controlers/singUpController.php" method="POST">
            <input type="text" name="usuario" placeholder="Nombre de usuario">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="text" name="rol" placeholder="admin/user">
            <button type="submit">Enviar</button>
        </form>
</div>
</body>