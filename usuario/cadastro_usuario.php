<?php include("../layout/header.php");?>

<?php
if($_POST){
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $sql = "insert into {$prefixo_tabelas}usuario (nome,email,senha) values (?,?,?)";
  $params = array($nome,$email,$senha);  
	$resultado = sqlsrv_query($con,$sql,$params);
  if ($resultado) {  
	  header("Location: /cecpa/usuario/listar_usuario.php");
  } else {  
    die(print_r(sqlsrv_errors(), true));  
  }
}
?>

<h1>Função</h1>
<form method="post" action="cadastro_usuario.php">
<div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome">
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
</div>
<div class="mb-3">
    <label class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha">
</div>
<input type="submit" class="form-control" value="Salvar">
</form>
<?php include("../layout/footer.php");?>      