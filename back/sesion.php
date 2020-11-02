<?php

    function usuario_autenticado()
    {
        if ( isset($_SESSION['usuario']) )
        {
            header("Location:../ui/sucess_login.php");
            exit();
        }
    }

    session_start();
    usuario_autenticado();
?>