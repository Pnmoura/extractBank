<?php

declare(strict_types=1);

use extractBank\App\service\DatabaseConnection;

require_once '../../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/index.css">
    <title>Formulário</title>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="select.php">Listar Registros</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Formulário de cadastro no banco-->
<form method="POST" action="../../App/service/processaInfo.php">
    <div class="row g-3">
        <label for="nome">Nome:</label>
        <input type="nome" name='nome' id="email" class="form-control" placeholder="Digite o seu nome:"
               aria-label="email" required>
    </div>
        <br>
            <div class="col">
                <label for="nivel">Email:</label>
                <input type="email" name='email' id="email" class="form-control" placeholder="Digite o seu email:"
                       aria-label="email" required pattern="^[a-zA-Z0-9._%+-]+@tradeup\.com$">
            </div>
            <br>
            <div class="col">
                <label for="nivel">Cargo:</label>
                <input type="text" name='cargo' id="cargo" class="form-control" placeholder="Ex.: Dev, QA ..."
                       aria-label="cargo" required>
            </div>
            <br>
            <div class="col">
                <label for="nivel">Nível:</label>
                <input type="text" name='nivel' id="nivel" class="form-control" placeholder="Jr, Pl, Sr ..."
                       aria-label="nivel" required>
            </div>
        </div>
        <input type="submit" value="Enviar">
</form>
</body>
</html>

