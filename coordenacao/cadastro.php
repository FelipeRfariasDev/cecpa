<?php
include ("../conexao.php");

if($_POST){
  $nome = $_POST["nome"];
  $sql = "insert into coordenacao (nome) values (?)";
  $params = array($nome);
	$resultado = sqlsrv_query($con,$sql,$params);
  if ($resultado) {  
	  header("Location: /cecpa/coordenacao/listar.php");
  } else {  
    die(print_r(sqlsrv_errors(), true));  
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>CECPA - Centralizadora de Compras</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <h1>CECPA - Centralizadora de Compras</h1>
        <?php include("../menu.php");?>
            <h1>Coordenação</h1>
            <form method="post" action="cadastro.php">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <input type="submit" class="form-control" value="Salvar">
        </form>
    </div>
  </body>
</html>