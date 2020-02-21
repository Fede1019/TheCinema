<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<style>
			.button2 {
				border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
				background-color: #EA7055; /* red */
			position: absolute;
				top: 15%;
				left: 15%;
				transform: translate(-50%, -50%);
			}
			.button1 {
				border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
				background-color: #EA7055; /* red */
			position: absolute;
				top: 15%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			body {
				margin: 10;
				background: rgb(253,187,45);
				background: linear-gradient(0deg, rgba(253,187,45,1) 0%, rgba(34,193,195,1) 100%);
				font-family: 'Work Sans', sans-serif;
				font-weight: 900;
			}
		</style>
	</head>
	<body>
							<div class="alert alert-primary" role="alert">
								A simple primary alert—check it out!
								</div>
				<a> <font face='Work Sans' size='900'> Benvenuto  </font></a>
			<form action="areaLogin.php" method="post">
					<input type="submit" name="logout" class="button1"  value="Logout"></input>
					<input type="submit" name="elimina" class="button2" id="2" value="Elimina l'account"></input>
				</form>

				<?php
					if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(isset($_POST["logout"])){
							header('location: http://localhost:8081/esPHP/TheCinema/Registrazione/loginregister/logout.php');
						}	if(isset($_POST["alimina"])){

							}
					}


				 ?>
	</body>
</html>
