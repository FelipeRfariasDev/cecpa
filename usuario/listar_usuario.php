<?php include("../layout/header.php");?>

<h1>Usuários &nbsp;<a href="/cecpa/usuario/cadastro_usuario.php" class="btn btn-success">Novo</a></h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM {$prefixo_tabelas}usuario";
    $resultado = sqlsrv_query($con,$sql);
    while($linha=sqlsrv_fetch_array($resultado)){
    ?>
    <tr>
      <th scope="row"><?php echo $linha["id"];?></th>
      <td><?php echo $linha["nome"];?></td>
      <td><?php echo $linha["email"];?></td>
      <td>
        <button type="button" class="btn btn-primary">Alterar</button>
        <button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
<?php include("../layout/footer.php");    