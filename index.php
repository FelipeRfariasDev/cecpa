<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>CECPA - Centralizadora de compras</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <h1>Login CECPA</h1>
        <form method="post" action="inicio.php">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="senha">
                </div>
            </div>

            <div class="mb-3 row">
                <button type="submit" class="btn btn-success">Entrar</button>
            </div>
        </form>
    </div>
  </body>
</html>