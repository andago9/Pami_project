<!DOCTYPE html>
<html lang="es-es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PAMI Project V 0.0.1</title>
  </head>

    <?php
  		session_start();
  			if (isset($_SESSION['user_id'])) {
  			header('dashboard.php');
  			}
  	?>
  <body>
    <h1>pami project</h1>
    <?php if(!empty($user)):
    ?>

    <a href="logout.php">salir</a>
    <?php else: ?>
      <div>
        <a href="login.php">iniciar sesion.</a>
    o
    <a href="signup.php" >registrarse.</a>
  <?php endif;
  ?>
  </body>
  <footer>
  	<p> &copy; Blinter <a href="mailto:andres.david8.8@gmail.com"> Andago</a> <a href="mailto:velozasergio@gmail.com">Velosergio </a>  2018.  Version 0.0.1</p>
  </footer>
</html>
