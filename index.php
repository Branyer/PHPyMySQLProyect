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
    <div id="forms" class="forms">
    <!--Form de registro-->
    <form action="registro.php" method="post" class="registro">
      <header><h2>REGISTRARSE</h2></header>

      <label for="nombre" >Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Branyer"   pattern="[a-zA-z]+" required/>

      <label for="apellidos" >Apellido:</label>
      <input type="text" id="apellidos" name="apellidos" placeholder="Vergara" pattern="[a-zA-z]+" required/>

      <label for="cedula" >Cedula: </label>
      <input type="text" id="cedula" name="cedula" placeholder="27108704" pattern="[0-9]+" required/>

      <label for="direccion" >Direccion: </label>
      <input type="text" id="direccion" name="direccion" placeholder="123 calle falsa" required/>

      <label for="Sexo">Sexo:</label><br/>
      <input type="radio" id="hombre" name = "Sexo" value="hombre" checked/>
      <label for="hombre">Hombre</label>
      <input type="radio" id="mujer" name = "Sexo" value="mujer"/>
      <label for="mujer">Mujer</label>

      <label for="telefono">Telefono:</label>
      <input type="tel" id="telefono" name="telefono" placeholder="4140356111"  pattern="[0-9]+" required/>

      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" placeholder="123@123.com" required/>

      <label for="nick">Nickname:</label>
      <input type="text" id="nick" name="nick"
      minlength="5" placeholder="Mi_NickName"
      maxlength="100"
      pattern="[A-Za-z0-9_]+"
      title="No puede contener espacios, ni caracteres especiales."
      required/>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" minlength="8" maxlength="100" placeholder="mi_contraseña123" required/>

      <input type="submit" value="Enviar datos"/>

    </form>

    <!--Form de ingreso-->
    <form action="login.php" method="post" class="login">
      <h2>LOGIN</h2>
      <label for="nickname">Nickname: </label>
      <input type="text" id="nick" name="nickname" required>
      <label for="pass">Contraseña: </label>
      <input type="password" id="pass" name="pass" required>
        <input type="submit" value="Ingresar"/>

    </form>
  </div>
    <!--Pide de pagina-->
    <footer>
      Realizado por Branyer Vergara
    </footer>


  <body>
<html>
