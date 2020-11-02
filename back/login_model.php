<?php

    try {
        require_once 'conexionBD.php';

        //Nuevo registro
        if( isset($_POST['nuevo']) ){

            $cleaned_mail = trim( $_POST['mail'] );
            $cleaned_password = trim( $_POST['password'] );

            $conexion = $objetoPDO->prepare("INSERT INTO user(mail,password) VALUES(:mail,:password)");
            $conexion->bindParam(":mail",$cleaned_mail);
            $conexion->bindParam(":password",$cleaned_password);

            if ( !$conexion->execute() ){
                throw new Exception('Ocurrió un error, intentar mas tarde');
            }

            header("Location:../ui/exito.php");

        } elseif ( isset($_POST['recuperar']) ){
            
            $cleaned_mail = trim( $_POST['mail'] );

            $conexion = $objetoPDO->prepare("SELECT * FROM user WHERE mail =:mail;");
            $conexion->bindParam("mail",$cleaned_mail);

            $conexion->execute();
            $usuario = $conexion->fetch(PDO::FETCH_ASSOC);

             if ( $usuario ){

                $encData = array('mail'=>$usuario['mail'], 'password'=>$usuario['password']);
                $arg = base64_encode( json_encode($encData) );
    
                header("Location:../ui/forgot_password.php?data=".$arg);

                
            } else {

                header("Location:../ui/forgot_password.php?error=1");
            }


        } else {

            //Es loguearse
            $cleaned_mail = trim( $_POST['mail'] );
            $cleaned_password = trim( $_POST['password'] );

            $conexion = $objetoPDO->prepare("SELECT * FROM user WHERE mail =:mail;");
            $conexion->bindParam("mail",$cleaned_mail);

            $conexion->execute();
            $usuario = $conexion->fetch(PDO::FETCH_ASSOC);


            if ( !$usuario ){
                header('Location:../ui/login.php?error=1');
            }

            if ( $usuario['password'] == $cleaned_password ){

                session_start();
                $_SESSION['usuario'] = $usuario['mail'];
                header('Location:../ui/sucess_login.php');

            } else {
                header('Location:../ui/login.php?error=1');
            }
            die();

        }
        

    } catch (Exception $e) {
        echo 'Ocurrió un error';
        die();
    }


    function get_password($password){

        return $password;
    }
?>