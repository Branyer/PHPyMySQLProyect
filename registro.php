<?php
require_once ('assets/includes/conexion.php');
session_start();
  if(isset($_POST)){//los datos me estan llegando
      
      /*guardando los valores del registro*/
    $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido= isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $cedula= isset($_POST['cedula']) ? $_POST['cedula'] : false;
    $direccion= isset($_POST['direccion']) ? $_POST['direccion'] : false;
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : false;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
    $nick = isset($_POST['nick']) ? $_POST['nick'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    /*Insertar usuario en la base de datos*/
    
   $sql = "SELECT nickname FROM usuarios WHERE nickname LIKE '$nick' ";
   $result=mysqli_query($db, $sql);
   $extraido=$result->fetch_array();
   var_dump($extraido);
 
   if(!$extraido){ //validando que no se repita el nick name
   
   $sql = "INSERT INTO usuarios VALUES('$nombre','$apellido','$cedula','$direccion','$sexo','$telefono','$correo','$nick', '$password');";
   $insertar = mysqli_query($db, $sql);
   
    if(empty(mysqli_error($db))){
        $_SESSION['completado']="El registro se ha completado con exito";
    }else{
        $_SESSION['completado']="ERROR-No se ha completado el registro";
    }
   
   }else{
     
       
       $_SESSION['completado']="ERROR-el nickname ya está en uso";
   }
   
  }

header('location:index.php');
