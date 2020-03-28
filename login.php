<?php
session_start();
if(isset($_POST)){
    require_once ('assets/includes/conexion.php');
    $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : false;
    $pass = isset($_POST['pass']) ? $_POST['pass'] : false;

    $sql = "SELECT * FROM usuarios WHERE nickname LIKE '$nickname' AND contrasena LIKE '$pass' ";
    $result=mysqli_query($db, $sql);
    $extraido=$result->fetch_array();

    if(isset($extraido)){
      $is_admin = $extraido['is_admin']==1 ? true : false;
      if(!$is_admin){
        header('location:reg_boletos.php');
      }else{
        header('location:adm_boletos.php');
      }
    }else{
      $_SESSION['inicio_sesion'] = "Nombre de Usuario o Contraseña incorrectos";
      header('location:index.php');
    }
}
