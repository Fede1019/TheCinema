<html>


			<head>
				<link rel="stylesheet" href="File-CSS/BarraDiNavigazione.css"  >

						</head>

<header>
	<body>
		<?php
			session_start();
			if(empty($_SESSION["privilegiAdmin"])){
				//non sono admin
				if(empty($_SESSION["log"])){
						$home="  <div class=\"container\">
						  <h1 class=\"logo\"></h1>
							<img src=\"Immagini\logoHome.JPG\">
							</img>
							<nav li >
							  <li class=\"dropdown-contnent\"><a class=\"active\" href=\"Home.php\">Home</a></li>
							  <li><a class=\"active\" href=\"Prenotazione/Prenotazione.php\"><span>Prenotazione</span></a></li>
							  <li><a class=\"active\" href=\"#\">Offerte</a></li>
							  <li><a class=\"active\" href=\"#\">Lista Film</a></li>
							  <li><a class=\"active\" href=\"Registrazione/loginregister/Login-Registra.php\">Registrati-Login</a></li>
						  </nav li>
						</div> ";
						echo $home;
					}else{
						$home="  <div class=\"container\">
						  <h1 class=\"logo\"></h1>
							<img src=\"Immagini\logoHome.JPG\">
							</img>
							<nav li >
							  <li class=\"dropdown-contnent\"><a class=\"active\" href=\"Home.php\">Home</a></li>
							  <li><a class=\"active\" href=\"Prenotazione/Prenotazione.php\"><span>Prenotazione</span></a></li>
							  <li><a class=\"active\" href=\"#\">Offerte</a></li>
							  <li><a class=\"active\" href=\"#\">Lista Film</a></li>
							  <li><a class=\"active\" href=\"areaLogin.php\">Visualizza Dati - Logout</a></li>
						  </nav li>
						</div> ";
						echo $home;
					}
			}else{
				//sono admin
				$home="  <div class=\"container\">
					<h1 class=\"logo\"></h1>
					<img src=\"Immagini\logoHome.JPG\">
					</img>
					<nav li >
						<li class=\"dropdown-contnent\"><a class=\"active\" href=\"Home.php\">Home</a></li>
						<li><a class=\"active\" href=\"Prenotazione/Prenotazione.php\"><span>Prenotazione</span></a></li>
						<li><a class=\"active\" href=\"#\">Offerte</a></li>
						<li><a class=\"active\" href=\"#\">Lista Film</a></li>
						<li><a class=\"active\" href=\"areaLoginAdmin.php\">Area Admin-logout</a></li>
					</nav li>
				</div> ";
				echo $home;
			}

				?>

</header>

		  <hr class="new1" >
	</body>
</html>
