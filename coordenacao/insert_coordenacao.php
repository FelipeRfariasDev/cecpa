<?php include ("../conexao.php");

$nome = $_POST["nome"];
$sql = "insert into {$prefixo_tabelas}coordenacao (nome) values (?)";
$params = array($nome);
  $resultado = sqlsrv_query($con,$sql,$params);
if ($resultado) {  
    header("Location: /cecpa/coordenacao/listar_coordenacao.php");
} else {  
  die(print_r(sqlsrv_errors(), true));  
}