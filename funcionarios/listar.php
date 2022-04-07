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
        <h1>Funcionários &nbsp; <a href="http://localhost/cecpa/funcionarios/cadastro.php" class="btn btn-success">Novo</a></h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Matrícula</th>
              <th scope="col">Nome Completo</th>
              <th scope="col">Endereço Residencial</th>
              <th scope="col">e-mail</th>
              <th scope="col">Telefone</th>
              <th scope="col">Coordenação</th>
              <th scope="col">Função</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT 
            funcionarios.id,
            funcionarios.nome,
            funcionarios.matricula,
            funcionarios.endereco,
            funcionarios.email,
            funcionarios.telefone,
            coordenacao.nome as coordenacao_nome,
            funcao.nome AS funcao_nome
            FROM
            funcionarios
              LEFT JOIN
            funcao ON (funcao.id = funcionarios.funcao_id)
                LEFT JOIN
            coordenacao ON (coordenacao.id = funcionarios.coordenacao_id)";
 		        $resultado = sqlsrv_query($con,$sql);
		        while($linha=sqlsrv_fetch_array($resultado)){
            ?>
            <tr>
              <th scope="row"><?php echo $linha["id"];?></th>
              <td><?php echo $linha["matricula"];?></td>
              <td><?php echo $linha["nome"];?></td>
              <td><?php echo $linha["endereco"];?></td>
              <td><?php echo $linha["email"];?></td>
              <td><?php echo $linha["telefone"];?></td>
              <td><?php echo $linha["coordenacao_nome"];?></td>
              <td><?php echo $linha["funcao_nome"];?></td>
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