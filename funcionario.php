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
            <table class="table table-dark table-hover">
            <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Cargo</th>
      <th scope="col">Salário</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mateus da Silva Alves</td>
      <td>Técnico</td>
      <td>1800</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Rafael</td>
      <td>Auxiliar</td>
      <td>1200</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Lucas</td>
      <td>Auxiliar</td>
      <td>1200</td>
      <td>...</td>
      <td>...</td>
    </tr>
  </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
<a href="cadastrof.php" type="button" class="btn btn-success">Cadastrar Novo Funcionário </a>
    </center>