<?php
$nome = filter_input(INPUT_POST, 'NOMEdb');
$cpf = filter_input(INPUT_POST, 'CPFdb');
$creci = filter_input(INPUT_POST, 'CRECIdb');
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "guilhermeB";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}else{
	$sql = "INSERT INTO corretor values (null,'$nome','$cpf','$creci')";
	if ($conn->query($sql)){
		echo "Registro inserido com sucesso";
	}else{
		echo "Erro: ". $sql ." ". $conn->error;
	}
	$conn->close();
}

header('Location: index.php');
exit;
?>