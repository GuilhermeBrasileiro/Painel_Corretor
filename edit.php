<?php
$id = $_GET['id'];

$dbname = "guilhermeB";
$conn = mysqli_connect("localhost", "root", "1234", $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM corretor WHERE ID = $id"; 
$result = $conn->query($sql);

$nome = "";
$cpf = "";
$creci = "";

if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
		  	$nome = $row["NOME"];
		  	$cpf = $row["CPF"];
		  	$creci = $row["CRECI"];
		  }
		}


$conn->close();

header("Location: index.php");
?>