<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
    <body>
        <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="bootstrap.php" class="navbar-brand" style="color:white;">Página Principal</a>
            <a href="funcionario.php" class="navbar-brand" style="color:white;">Funcionários</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="color:white;">Search</button>
            </form>
        </div>
    </nav>
    <center>
    <form action="" method="POST">
    <label>
            <b style="color:black;">Nome:</b>
            <input type="text" name="Nome">
    </label>
            <b style="color:red;">Cargo:</b>
            <input type="text" name="Cargo">
    </label>
    <label>
            <b style="color:red;">Salário:</b>
            <input type="number" name="idade">
    </label>
    <label>
            <b style="color:red;">Descrição:</b>
            <input type="text" name="descrição"> 
    </label>
    <label>
            <b style="color:red;">Ação:</b>
            <input type="text" name="ação">
    </label> 
</center>
</body>
</html>