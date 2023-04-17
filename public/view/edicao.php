<?php

declare(strict_types=1);

use extractBank\App\service\DatabaseConnection;

require_once '../../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();
$stmt = $db->executeQuery('SELECT * FROM users_for_extract WHERE id=' . $_GET['id']);

$dados = $stmt->fetch(PDO::FETCH_ASSOC);


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
    <title>Editar</title>
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
<form method="POST" action="../../App/service/atualiza.php">

    <div class="row g-3">
        <input type="hidden" name="id" value="<?= $dados['id']?>">
        <label for="nome">Nome:</label>
        <input type="text" name='nome' value="<?= $dados['nome']; ?>" id="nome" class="form-control"
               placeholder="Digite o seu nome:"
               aria-label="nome">
    </div>
    <br>
    <div class="col">
        <label for="email">Email:</label>
        <input type="email" name='email' value="<?= $dados['email']; ?>" id="email" class="form-control"
               placeholder="Digite o seu email:"
               aria-label="email">
    </div>
    <br>
    <div class="col">
        <label for="nivel">Cargo:</label>
        <input type="text" name='cargo' value="<?= $dados['cargo']; ?>" id="cargo" class="form-control"
               placeholder="Ex.: Dev, QA ..."
               aria-label="cargo">
    </div>
    <br>
    <div class="col">
        <label for="nivel">Nível:</label>
        <input type="text" name='nivel' value="<?= $dados['nivel']; ?>" id="nivel" class="form-control"
               placeholder="Jr, Pl, Sr ..."
               aria-label="nivel">
    </div>
    </div>
    <br>
    <input type="submit" name="submit" value="Salvar">
</form>
</body>
</html>

