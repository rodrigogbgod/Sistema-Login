<?php 
  include "../login/validaSessao.php";
  include "../connect/connect.php";
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Painel Administrativo</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <h2>Cadastro</h2>
      <h3> <a href="../login/logout.php"> Sair</a></h3>
      <form name="produtos" method="post" action="cadProduto.php" >
        <div class="control-group">
          <label for="inputEmail">Produto</label>
          <div class="controls">
            <input id="inputProduto" type="text" name="produto">
          </div>
        </div>
        <div class="control-group">
          <label for="inputQuantidade">Quantidade</label>
          <div class="controls">
            <input id="inputQuantidade" type="number" name="qtd"> <br><br>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button class="btn" type="submit">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="listagem">
    <table border="1" class="table table-hover">
      <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Quantidade</th>
      </tr>
      <?php
        $sql = "SELECT id, descricao, qtd FROM produtos";
        $result = $conn->query($sql);
        while ($row = $result->fetch_array()){
          ?>
          <tr>
            <td> <?php echo $row["id"]; ?></td>
            <td><?php echo $row["descricao"]; ?></td>
            <td><?php echo $row["qtd"]; ?></td>
          </tr>
      <?php     
        }
        $conn->close();
      ?>
    </table>
  </div>
</body>
</html>