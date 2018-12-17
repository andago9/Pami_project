<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    dashboard('Location: logout.php');
  }

  require 'database.php';
  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {

    if($_POST['password'] == $_POST['confirm_password']){

      $query = "SELECT id FROM USERS WHERE email ='".$_POST['email']."'";
      $consul = mysqli_query($conn, $query);
      $results = mysqli_fetch_array($consul);

      if (count($results) == 0) {

        $query = "INSERT INTO USERS (email, password) VALUES ('".$_POST['email']."' ,'".$_POST['confirm_password']."')";
        $consul = mysqli_query($conn, $query);

        $message = 'Successfully created new user';

      }
      else{
        $message = 'El email ya existe';
      }

    }else{
      $message="La contraseña no coincide";
    }

  }
  else{
    $message="Hay campos vacios, llene los campos";

  }

?>
<!--echo "<script>alert('Recuerde diligenciar todos los campos');</script>";-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PAMI Project V 0.0.1</title>
</head>
<body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

				<form action="signup.php" method="POST" >
          <span> Registro</span>
            <h1>Registro</h1>
    <span>O <a href="login.php">Inicie Sesion</a></span>

   <div>
						<input  name="email" type="text" placeholder="Email">
					</div>
<div >
						<input name="password" type="password" placeholder="Ingrese Su Contraseña">

					</div>


<div>
						<input name="confirm_password" type="password" placeholder="Repita Su Contraseña">

					</div>

					<div >
						<button>
						Registrarse
						</button>
					</div>
      </div>
	  </div>
	  </div>
      </form>


  </body>
  <footer>
  	<p> &copy; Blinter <a href="mailto:andres.david8.8@gmail.com"> Andago</a> <a href="mailto:velozasergio@gmail.com">Velosergio </a>  2018.  Version 0.0.1</p>
  </footer>
</html>
