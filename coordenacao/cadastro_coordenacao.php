<?php include("../layout/header.php");

if($_POST){
  $nome = $_POST["nome"];
  $sql = "insert into {$prefixo_tabelas}coordenacao (nome) values (?)";
  $params = array($nome);
  $resultado = sqlsrv_query($con,$sql,$params);
  if($resultado){
      header("Location: /cecpa/coordenacao/listar_coordenacao.php");
  }else{  
    die(print_r(sqlsrv_errors(), true));  
  }
}
?>
<h1>Coordenação</h1>
<form method="post" action="cadastro_coordenacao.php">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <input type="submit" class="form-control" value="Salvar">
</form>
<?php include("../layout/footer.php");?>