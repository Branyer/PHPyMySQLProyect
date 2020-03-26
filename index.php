<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <title>PHP y MySQL proyect</title>
  <head>
  <body>
    <!--Cabecera -->
    <header>
      <h1>PHP Y MySQL</h1>
    </header>
    <!--Form de registro-->
    <form action="registro.php" method="post">
      <header>Registrase</header>

      <label for="nombre" >Nombres:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Branyer" maxlength="100" pattern="" required/>

      <label for="apellidos" >Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" placeholder="Vergara" maxlength="100" pattern="" required/>

      <label for="cedula" >Cedula: </label>
      <input type="text" id="cedula" name="cedula" placeholder="27108704" pattern="" required/>

      <label for="direccion" >Direccion: </label>
      <input type="text" id="direccion" name="direccion" placeholder="123 calle falsa" required/>

      <label for="Sexo">Sexo:</label>
      <input type="radio" id="hombre" name = "Sexo" value="hombre" checked/>
      <label for="hombre">Hombre</label>
      <input type="radio" id="mujer" name = "Sexo" value="mujer"/>
      <label for="mujer">Mujer</label>

      <label for="telefono">Telefono:</label>
      <input type="text" id="telefono" name="telefono" placeholder="+584140356111"  required/>

      <label for="nick">Nickname:</label>
      <input type="text" id="nick" name="nick"  minlength="5" placeholder="Mi_NickName" maxlength="100" required/>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" minlength="8" maxlength="100" placeholder="mi_contraseña123" required/>


    </form>

    <!--Form de ingreso-->
    <form action="login.php" method="post">
    </form>
    <!--Pide de pagina-->
    <footer>
    </footer>


  <body>
<html>
