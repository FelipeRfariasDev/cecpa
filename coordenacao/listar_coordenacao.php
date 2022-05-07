<?php include("../layout/header.php");?>

<h1>Coordenações &nbsp; <a href="/cecpa/coordenacao/cadastro_coordenacao.php" class="btn btn-success">Novo</a></h1>
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
    $sql = "SELECT id, nome FROM {$prefixo_tabelas}coordenacao";
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

<?php include("../layout/footer.php");?>