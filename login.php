<?php
	session_start();
		if (isset($_SESSION['user_id'])) {
		header('Location: dashboard.php');
		}

	require 'database.php';

	if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $query = "SELECT id, email, password FROM USERS WHERE email ='".$_POST['email']."'AND password = '".$_POST['password']."'";
    $consul = mysqli_query($conn, $query);
    $results = mysqli_fetch_array($consul);

    $message = '';

    if (count($results) >0) {
      $_SESSION['user_id'] = $results["id"];
      header("Location: dashboard.php");
      #echo '<script>location.href="dashboard.php;</script>';
    } else {
      $message = 'Sorry, those credentials do not match';
    }
	}
?>


<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="es-es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PAMI Project V 0.0.1</title>
  </head>
<body>
    <?php if(!empty($message)):
	?>
    <p> <?= $message ?></p>
    <?php endif; ?>
<div>
			<form action="login.php" method="POST" >
					<span> Iniciar Sesion</span>

						<input name="email" type="text" placeholder="Email">
						<input name="password" type="password" placeholder="Ingrese Su Contraseña">

						<div>
              <button >
						Login
						</button>
          </div>
          <div>
						<span>
						Forgot
						</span>
            <a href="#"> Username / Password?</a>
          </div>
            <div>
        		<a href="signup.php"> Registrarse></i></a>
            </div>
				</form>
  </div>
  </body>
  <footer>
  	<p> &copy; Blinter <a href="mailto:andres.david8.8@gmail.com"> Andago</a> <a href="mailto:velozasergio@gmail.com">Velosergio </a>  2018.  Version 0.0.1</p>
  </footer>
</html>
