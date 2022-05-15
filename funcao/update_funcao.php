<?php include ("../conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];

$sql = "update {$prefixo_tabelas}funcao set nome=(?) where id=(?)";
$params = array($nome,$id);
$resultado = sqlsrv_query($con,$sql,$params);
if ($resultado) {  
  header("Location: /cecpa/funcao/listar_funcao.php");
} else {  
  die(print_r(sqlsrv_errors(), true));  
}