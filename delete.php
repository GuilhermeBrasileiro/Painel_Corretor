<?php
$id = $_GET['id'];

$dbname = "guilhermeB";
$conn = mysqli_connect("localhost", "root", "1234", $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$sql = "DELETE FROM corretor WHERE ID = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: index.php');
    exit;
} else {
    echo "Erro em deletar o registro";
}
?>