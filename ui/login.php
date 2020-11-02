<!DOCTYPE html>
<html>
<head>
  <?php
    include_once 'templates/head.php'; 
  ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Hola Arturo</b> Bruno</a>
  </div>
  <?php if ( isset( $_GET['error'] )) { ?>
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        Ocurrió un error, verifica tu correo/password
    </div>
  <?php } ?>  
  <!-- /.login-logo -->
  <div class="card">
    
    <div class="card-body login-card-body">
      <p class="login-box-msg">Proyecto Login</p>

      <form action="../back/login_model.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="mail" class="form-control" placeholder="Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot_password.php">Olvidé mi password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Realizar Registro</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php
  include_once 'templates/body_scripts.php';
?>

</body>
</html>
