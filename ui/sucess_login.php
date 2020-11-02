<!DOCTYPE html>
<html>
<head>
  <?php
    session_start();
    if ( !isset($_SESSION['usuario']) ){
      header("Location:../ui/login.php");
      exit();
    }
    include_once 'templates/head.php'; 
  ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="alert alert-success alert-dismissible">
      <h5><i class="icon fas fa-check"></i> Exito!</h5>
      Login con sesión :)
  </div>
  <p>
    <a href="login.php?cerrar_sesion=true" class="btn btn-danger btn-block">Cerrar sesión</a>
  </p>
</div>
<!-- /.login-box -->

<?php
  include_once 'templates/body_scripts.php';
?>

</body>
</html>
