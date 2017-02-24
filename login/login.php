<?php 

  include "../connect/connect.php";

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = mysql_query("select * from usuarios where email = '$email' and senha = '$senha'") or die (mysql_error());
  $row = mysql_num_rows($sql);

  if ($row > 0) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    echo "Logado com sucesso! Aguarde um instante";
    $toAdmin = '../painel/home.php';
    header("location:$toAdmin");
  } else {
    $index = "../index.html";
    header("Location:$index");
  }
 ?>