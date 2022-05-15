<?php include("../layout/header.php");

$id = $_GET["id"];

$sql = "SELECT * FROM {$prefixo_tabelas}funcao where id=".$id;
$resultado = sqlsrv_query($con,$sql);
$linha=sqlsrv_fetch_array($resultado);

?>
<h1>Função Atualizar</h1>
  <form method="post" action="update_funcao.php">
    <input type="hidden" name="id" value="<?php echo $linha["id"]?>">  
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" value="<?php echo $linha["nome"]?>">
    </div>
    <input type="submit" class="form-control" value="Update">
  </form>
<?php include("../layout/footer.php");