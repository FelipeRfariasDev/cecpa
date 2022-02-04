<?php
include ("../conexao.php");

if($_POST){
  $matricula = $_POST["matricula"];
  $nome_pessoa_variavel = $_POST["nome_pessoa_form"];
  $endereco = $_POST["endereco"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $coordenacao_id = $_POST["coordenacao_id"];
  $funcao_id = $_POST["funcao_id"];
  $sql = "insert into funcionarios (nome,matricula,endereco,email,telefone,coordenacao_id,funcao_id) values ('$nome_pessoa_variavel','$matricula','$endereco','$email', '$telefone', $coordenacao_id, $funcao_id)";
  //echo $sql;
  //exit;
  mysqli_query($con,$sql);
  header("Location: http://localhost/cecpa/funcionarios/listar.php");
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
                <input type="text" class="form-control" required placeholder = "Qual é o seu nome?" name="nome_pessoa_form">
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

                <!--<input type="text" class="form-control" required placeholder = "Qual é a sua coordenação?" name="coordenacao_id"> -->
                <select name="coordenacao_id" class="form-control" required>
                    <option></option>
                    <?php 
                    $query_buscar_funcoes = "select * from coordenacao";
                    $resultado = mysqli_query($con,$query_buscar_funcoes);
                    while($linha=mysqli_fetch_array($resultado)){
                    ?>
                    <option value=<?php echo $linha["id"];?>><?php echo $linha["nome"];?></option>
                    <?php  
                    }
                    ?>
                </select>
            
            </div>
            <div class="mb-3">
                <label class="form-label">Função</label>

                <!-- inicio antes -->
                <!-- <input type="text" class="form-control" required placeholder = "Qual é a sua funcao?" name="funcao_id"> -->
                <!-- fim antes -->   

                <!-- inicio depois -->
                <select name="funcao_id" class="form-control" required>
                    <option></option>
                    <?php 
                    $query_buscar_funcoes = "select * from funcao";
                    $resultado = mysqli_query($con,$query_buscar_funcoes);
                    while($linha=mysqli_fetch_array($resultado)){
                    ?>
                    <option value=<?php echo $linha["id"];?>><?php echo $linha["nome"];?></option>
                    <?php  
                    }
                    ?>
                </select>
                <!-- fim depois -->
            </div>
            <input type="submit" class="form-control" value="Salvar">
        </form>
    </div>
  </body>
</html>