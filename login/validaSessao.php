<?php 
  session_start();
  if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
    $index = "../index.html";
    header("Location:$index");
  }
?>