<?php

    function usuario_autenticado()
    {
        if (!revisar_usuario())
        {
            header("Location:../ui/sucess_login.php");
            exit();
        }
    }

    function revisar_usuario()
    {
        return isset($_SESSION["usuario"]);
    }
    session_start();
    usuario_autenticado();
?>