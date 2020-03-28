<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <title>PHP y MySQL proyect</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <head>
  <body>
    <!--Cabecera -->
    <header>
      <h1>PHP Y MySQL</h1>
    </header>
    <?php session_start()?>
    <div id="forms" class="forms">
    <!--Form de registro-->
      <?php require_once ('assets/includes/form_registro.php');?>
    <!--Form de ingreso-->
      <?php require_once ('assets/includes/form_login.php');?>
    </div>
    <!--Pide de pagina-->
    <footer>Realizado por Branyer Vergara</footer>
  <body>
<html>
