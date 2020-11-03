<!DOCTYPE html>
<html>
<head>
  <?php
    include_once '../back/sesion.php';
    include_once 'templates/head.php'; 
  ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Nuevo</b> Registro</a>
  </div>
  <?php
    if ( isset($_GET['mail']) ){ ?>
      <div class="alert alert-danger alert-dismissible">
        <h3><i class="icon fas fa-ban"></i> Error!</h3>
        Ocurrió un error, el correo ya existe
      </div>
  <?php } ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Proyecto Login</p>

      <form action="../back/login_model.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="mail" class="form-control" placeholder="Ingresa un correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Ingresa tu password para tu registro" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block">Guardar tu registro</button>
          </div>
          <!-- /.col -->
        </div>
        <input type="hidden" name="nuevo">
      </form>

      <p class="mb-1">
        <a href="login.php">Atrás</a>
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
