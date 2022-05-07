<?php include("../layout/header.php");?>
<h1>Coordenação</h1>
<form method="post" action="insert_coordenacao.php">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <input type="submit" class="form-control" value="Salvar">
</form>
<?php include("../layout/footer.php");?>