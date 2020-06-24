<!DOCTYPE html>
<html>
<head>
	<title>Painel Corretor</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<meta charset="utf-8">
	<meta name="description" content="Crie e gerencia a base de corretores.">
	<meta name="keywords" content="corretor,criar,excluir,imobiliaria">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>
<body>

<div class="container">

	<section class="register">

		<h2>Cadastro de corretor</h2>

		<form id="register" method="post" action="connect.php">

			<div class="form-wraper w40">
				<input type="number" name="CPFdb" id="CPFdb" placeholder="Digite seu CPF">
			</div><!-- form-wraper -->

			<div class="form-wraper w60">
				<input type="number" name="CRECIdb" id="CRECIdb" placeholder="Digite seu Creci">
			</div><!-- form-wraper -->

			<div class="form-wraper w100">
				<input type="text" name="NOMEdb" id="NOMEdb" placeholder="Digite seu nome completo">
			</div><!-- form-wraper -->

			<div class="form-wraper w100">
				<input type="submit" name="acao" value="Enviar">
			</div><!-- form-wraper -->

			<div class="clear"></div>

		</form>

	</section>

	<br><br><br>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "1234";
		$dbname = "guilhermeB";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
		  die("Falha na conexão: " . $conn->connect_error);
		}

		$sql = "SELECT ID, NOME, CPF, CRECI FROM corretor";
		$result = $conn->query($sql);

		//<td><a href='delete.php?id=".$row['ID']."'><img src='trash.png'></a></td>

		if ($result->num_rows > 0) {
		  echo "<table><tr><th>NOME</th><th>CPF</th><th>CRECI</th><th><img src='gear.png'></th></tr>";
		  while($row = $result->fetch_assoc()) {
		    echo "<tr><td>".$row["NOME"]."</td><td>".$row["CPF"]."</td><td>".$row["CRECI"]."</td>"."<td><a href='edit.php?id=".$row["ID"]."'><img src='edit.png'></a><a href='delete.php?id=".$row["ID"]."'><img src='trash.png'></a></td>"."</tr>";
		  }
		  echo "</table>";
		} else {
		  echo "<h2>Nenhum corretor cadastrado</h2>";
		}
		$conn->close();
	?>

</div>

<script type="text/javascript" src="jquery.js"></script>
<script src="functions.js"></script>
</body>
</html>