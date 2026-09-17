<?php

session_start();

function es_admin() {

    if(isset($_SESSION["rol"]) && $_SESSION["rol"] == "admin" ){
        return true;
    }else{
        echo "<script>
            alert('Error: No tenes el rol necesario');
            window.location.href = 'index.php?error=No autorizado';
        </script>";        
        exit();
    }

}

?>