<?php
session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Verificar Login e Iniciar Sesion</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/custom.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		
			<?php
			// Connection info. file
			include 'conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// datos enviados desde el formulario login.html 
			$email = $_POST['email']; 
			$password = $_POST['password'];
			
			// Consulta enviada a la base de datos
			$result = mysqli_query($conn, "SELECT email, password, name FROM login WHERE email = '$email'");
			
			// La variable $row retiene el resultado de la consulta
			$row = mysqli_fetch_assoc($result);
			
			// La variable $hash contiene el hash de contraseña en la base de datos
			$hash = $row['password'];
			
			
			if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
				echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido!</strong> $row[name]			
				<p><a href='edit-profile.php'>Edit Profile</a></p>	
				<p><a href='logout.php'>Logout</a></p></div>";	
			
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>email or password are incorrects!
				<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";			
			}	
			?>
		</div>

		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		
		<!--Botones nivel -->

		<form action="game1.php" method="post">                           	
			<div class="form-group">									
			<hr><button type="button1" class="btn btn-primary btn-lg">Nivel 1</button>        
			</div>							
		</form>

		
		<center>
		<div class="btn-group-vertical" >
		<hr><button type="button1" class="btn btn-primary btn-lg">Nivel 1</button>
		<hr><button type="button2" class="btn btn-primary btn-lg">Nivel 2</button>
		<hr><button type="button3" class="btn btn-primary btn-lg">Nivel 3</button>
		</div>
		</center>



	</body>
</html>