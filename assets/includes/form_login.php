 <form action="login.php" method="post" class="login">
      <h2>LOGIN</h2>
      <label for="nickname">Nickname: </label>
      <input type="text" id="nick" name="nickname" required>
      <label for="pass">Contraseña: </label>
      <input type="password" id="pass" name="pass" required>
      <input type="submit" name="submit" value="Ingresar"/>

      <?php if(isset($_SESSION['inicio_sesion'])):?>
      <?= '<br/>'.$_SESSION['inicio_sesion'];?>
      <?php unset($_SESSION['inicio_sesion']);
       endif;?>

    </form>
