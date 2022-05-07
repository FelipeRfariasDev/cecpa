<?php include ("../conexao.php");

$id = $_GET["id"];

$sql = "delete from {$prefixo_tabelas}funcao where id = (?)";
$params = array($id);
$resultado = sqlsrv_query($con,$sql,$params);
if ($resultado) {
    header("Location: /cecpa/funcao/listar_funcao.php");
} else {  
  die(print_r(sqlsrv_errors(), true));  
}