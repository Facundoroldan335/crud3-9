<?php require "partials/header.php";
      require "partials/footer.php";
?>
<body>
    <div class="form">
        <form action="controlers/loginController.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="password" placeholder="Contraseña">
            <button type="submit">Login</button>
        </form>
    </div>    
</body>