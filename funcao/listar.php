<?php
include ("../conexao.php");
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
        <h1>Funções &nbsp; <a href="http://localhost/cecpa/funcao/cadastro.php" class="btn btn-success">Novo</a></h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM funcao";
            $resultado = sqlsrv_query($con,$sql);
		        while($linha=sqlsrv_fetch_array($resultado)){
            ?>
            <tr>
              <th scope="row"><?php echo $linha["id"];?></th>
              <td><?php echo $linha["nome"];?></td>
              <td>
                <button type="button" class="btn btn-primary">Alterar</button>
                <button type="button" class="btn btn-danger">Excluir</button>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
    </div>
  </body>
</html>