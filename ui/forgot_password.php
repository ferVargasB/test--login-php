<!DOCTYPE html>
<html>
<head>
  <?php
    include_once '../back/sesion.php';
    include_once 'templates/head.php';
    $data = json_decode( base64_decode( $_GET['data'] ) );
  ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Recupera tu password</b></a>
  </div>
  <?php if ( isset( $_GET['error'] ) && !isset( $_GET['data'] )) { ?>
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        Ocurrió un error, no existe el correo
    </div>
  <?php } ?>  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Proyecto Login</p>

      <form action="../back/login_model.php" method="post" id="forgotten_form">
        <div class="input-group mb-3">
          <input type="email" id="mail" name="mail" class="form-control" required="" placeholder="Ingresa un correo"
            <?php if ( $data ) { ?>
              value = "<?php echo $data->mail;?>"
            <?php } ?>  
          >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php if ( !isset($_GET['data']) ) { ?>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button id="submit" type="submit" class="btn btn-info btn-block">Recupera tu password</button>
            </div>
            <!-- /.col -->
          </div>
        <?php } else { ?>
          <div class="input-group mb-3">
            <input type="text" name="password" class="form-control" value="<?php echo $data->password;?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
        <?php } ?>  
        <input type="hidden" name="recuperar">
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
