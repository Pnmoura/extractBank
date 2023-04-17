<?php

declare(strict_types=1);

use extractBank\App\service\DatabaseConnection;

include_once '../../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();
$stmt = $db->executeQuery('SELECT * FROM users_for_extract');

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
    <title>Select no banco</title>
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col" name="id">Id</th>
            <th scope="col" name="nome">Nome</th>
            <th scope="col" name="email">Email</th>
            <th scope="col" name="cargo">Cargo</th>
            <th scope="col" name="nivel">Nivel</th>
            <th scope="col" name="nivel">Editar</th>
        </tr>
        </thead>
        <tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
        <tr>
            <td name='id' id="id" type="text" class="editable-field" disabled="true"><?php echo $row['id']; ?></td>
            <td name='nome' id="nome" type="text" class="editable-field" disabled="true"><?php echo $row['nome']; ?></td>
            <td name='email' id="email" type="email" class="editable-field" disabled="true"><?php echo $row['email']; ?></td>
            <td name='cargo' id="cargo" type="text" class="editable-field" disabled="true"><?php echo $row['cargo']; ?></td>
            <td name='nivel' id="nivel"  type="text" class="editable-field" disabled="true"><?php echo $row['nivel']; ?></td>
            <td name='button' class="actions-button">
                <a href="edicao.php?id=<?= $row['id']?>">
                    <button type="submit" class="btn btn-outline-warning">Editar</button>
                </a>

                <a href="../../App/service/delete.php?id=<?= $row['id']?>">
                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                </a>
            </td>
        </tr>
        <?php
        $db->disconnect();
        }?>
        </tbody>
    </table>

<script src="../../src/edit.js"></script>

</body>
</html>