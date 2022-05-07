<?php include("../layout/header.php");?>

<h1>Funções &nbsp; <a href="/cecpa/funcao/cadastro_funcao.php" class="btn btn-success">Novo</a></h1>
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
    $sql = "SELECT * FROM {$prefixo_tabelas}funcao";
    $resultado = sqlsrv_query($con,$sql);
    while($linha=sqlsrv_fetch_array($resultado)){
    ?>
    <tr>
      <th scope="row"><?php echo $linha["id"];?></th>
      <td><?php echo $linha["nome"];?></td>
      <td>
        <button type="button" class="btn btn-primary">Alterar</button>
        <a href="excluir_funcao.php?id=<?php echo $linha["id"];?>"><button type="button" class="btn btn-danger">Excluir</button></a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>

<?php include("../layout/footer.php");