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
				top: 90%;
				left: 15%;
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
						<form action="areaLoginAdmin.php" method="post">
								<input type="submit" name="svuotaDatabase" class="button2"  value="Svuota Database"></input>
							</form>
	<body>


				<?php
				//includo file per la connesione al database
					include "Registrazione/loginregister/connessione.php";
					//quando viene cliccato il pulsante
					if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(isset($_POST["svuotaDatabase"])){
							//creo la query
							$priv="user";
								$sql="delete from utente where privilegi=\"user\" ";
											if ($conn->query($sql) === TRUE) {

											} else {
													echo "non fa";
											}

									$conn->close();
							header('refresh:0');
						}
					}else{

									//prendo tutti i dati dal Database su tutti gli utenti Registrati

																$sql = "SELECT idUtente,username,mail,psw,dataNascita,punti,privilegi,orario from utente";
																$records=$conn->query($sql);
																if ( $records == TRUE) {
																		//echo "<br>Query eseguita!";
																} else {
																	die("Errore nella query: " . $conn->error);
																}

																//gestisco gli eventuali dati estratti dalla query
																if($records->num_rows ==0){
																	header('Location: Login-Registra.php');
																	//die("");
																}else{
																	$msgTable=" <table class=\"table\">
																						  <thead class=\"thead-dark\">
																						    <tr>
																						      <th scope=\"col\">idUtente</th>
																						      <th scope=\"col\">username</th>
																						      <th scope=\"col\">email</th>
																						      <th scope=\"col\">password</th>
																									<th scope=\"col\">dataNascita</th>
																						      <th scope=\"col\">punti</th>
																									 <th scope=\"col\">orario</th>
																						      <th scope=\"col\">privilegi</th>
																						    </tr>
																						  </thead> <tbody> ";
																		while($tupla=$records-> fetch_assoc()){

																				//dati presi dal Database
																			$idUtente=$tupla["idUtente"];
																			$username=$tupla["username"];
																			$email=$tupla["mail"];
																			$pass=$tupla["psw"];
																			$dataNascita=$tupla["dataNascita"];
																			$punti=$tupla["punti"];
																			$privilegi=$tupla["privilegi"];
																			$orario=$tupla["orario"];
																				//inserimento nella tabella
																				if($privilegi=="admin"){
																					$msgTable.="<tr>
																							<th scope=\"row\" class=\"bg-danger\" >$idUtente</th>
																							<td class=\"bg-danger\" >$username</td>
																							<td class=\"bg-danger\" >$email</td>
																							<td class=\"bg-danger\" >$dataNascita</td>
																							<td class=\"bg-danger\" >$idUtente</td>
																							<td class=\"bg-danger\" >$idUtente</td>
																							<td class=\"bg-danger\" >$orario</td>
																							<td class=\"bg-danger\" >$privilegi</td>

																							</tr>";
																				}else{
																					$msgTable.="<tr>
																				      <th scope=\"row\" class=\"bg-info\">$idUtente</th>
																				      <td class=\"bg-info\" >$username</td>
																				      <td class=\"bg-info\" >$email</td>
																							<td class=\"bg-info\" >$dataNascita</td>
																				      <td class=\"bg-info\" >$idUtente</td>
																				      <td class=\"bg-info\" >$idUtente</td>
																							<td class=\"bg-info\" >$orario</td>
																							<td class=\"bg-info\" >$privilegi</td>

																				    	</tr>";
																						}
																			//$privilegi=$tupla["privilegi"];
																		}
																		$msgTable.="</tbody>
																								</table>";
																		echo $msgTable;


																}

								}

				 ?>
	</body>
</html>
