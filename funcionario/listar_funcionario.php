<?php include("../layout/header.php");?>
<h1>Funcionários &nbsp; <a href="/cecpa/funcionario/cadastro_funcionario.php" class="btn btn-success">Novo</a></h1>
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
    funcionario.id,
    funcionario.nome,
    funcionario.matricula,
    funcionario.endereco,
    funcionario.email,
    funcionario.telefone,
    coordenacao.nome AS coordenacao_nome,
    funcao.nome AS funcao_nome
    FROM
    {$prefixo_tabelas}funcionario as funcionario
      LEFT JOIN
    {$prefixo_tabelas}funcao as funcao ON (funcao.id = funcionario.funcao_id)
        LEFT JOIN
    {$prefixo_tabelas}coordenacao as coordenacao ON (coordenacao.id = funcionario.coordenacao_id)";
    
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
<?php include("../layout/footer.php");?>   