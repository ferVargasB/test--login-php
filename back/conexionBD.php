<?php
  try{
    //Opciones de la conexión
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $objetoPDO = new PDO('mysql:host=database-mysql.cjoge45ov4mr.us-east-2.rds.amazonaws.com;dbname=login','admin','8m--45Bn',$opciones);
    $objetoPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
  }
?>