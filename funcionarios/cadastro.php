<?php
include ("../conexao.php");

if($_POST){
  $matricula = $_POST["matricula"];
  $nome = $_POST["nome"];
  $endereco = $_POST["endereco"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $coordenacao_id = $_POST["coordenacao_id"];
  $funcao_id = $_POST["funcao_id"];
  $sql = "insert into funcionarios (nome,matricula,endereco,email,telefone,coordenacao_id,funcao_id) values (?,?,?,?,?,?,?)";
  $params = array($matricula,$nome,$endereco,$email,$telefone,$coordenacao_id,$funcao_id);  
	$resultado = sqlsrv_query($con,$sql,$params);
  if ($resultado) {  
	  header("Location: /cecpa/funcionarios/listar.php");
  } else {  
    die(print_r(sqlsrv_errors(), true));  
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>CECPA - Centralizadora de Compras</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <h1>CECPA - Centralizadora de Compras</h1>
        <?php include("../menu.php");?>
            <h1>Funcionários</h1>
            <form method="post" action="cadastro.php">
            <div class="mb-3">
                <label class="form-label">Matrícula</label>
                <input type="text" class="form-control" required placeholder = "Qual é a sua matrícula?" name="matricula">
            </div>
            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" required placeholder = "Qual é o seu nome?" name="nome">
            </div>
            <div class="mb-3">
                <label class="form-label">Endereço Residencial</label>
                <input type="text" class="form-control" required placeholder = "Qual é o seu endereço?" name="endereco">
            </div>
            <div class="mb-3">
                <label class="form-label">e-mail</label>
                <input type="email" class="form-control" required placeholder = "Qual é o seu e-mail?" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone </label>
                <input type="text" class="form-control" required placeholder = "Qual é o seu telefone?" name="telefone">
            </div>
            <div class="mb-3">
                <label class="form-label">Coordenação</label>
                <select name="coordenacao_id" class="form-control" required>
                    <option></option>
                    <?php 
                    $sql = "select * from coordenacao";
                    $resultado = sqlsrv_query($con,$sql);
		                while($linha=sqlsrv_fetch_array($resultado)){
                    ?>
                    <option value=<?php echo $linha["id"];?>><?php echo $linha["nome"];?></option>
                    <?php  
                    }
                    ?>
                </select>
            
            </div>
            <div class="mb-3">
                <label class="form-label">Função</label>
                <select name="funcao_id" class="form-control" required>
                    <option></option>
                    <?php 
                    $sql = "select * from funcao";
                    $resultado = sqlsrv_query($con,$sql);
		                while($linha=sqlsrv_fetch_array($resultado)){
                    ?>
                    <option value=<?php echo $linha["id"];?>><?php echo $linha["nome"];?></option>
                    <?php  
                    }
                    ?>
                </select>
            </div>
            <input type="submit" class="form-control" value="Salvar">
        </form>
    </div>
  </body>
</html>