<?php 
	include "../connect/connect.php";

	$produto = $_POST['produto'];
	$qtd = $_POST['qtd'];
	$senha = md5($_POST['inputPassword']);
	$sql = "INSERT INTO produtos (descricao, qtd) VALUES ('$produto', '$qtd')";

	if ($conn->query($sql)==TRUE){
		header('Location: home.php');
	}else{
		echo $conn->error;
	}
	$conn->close();
 ?>