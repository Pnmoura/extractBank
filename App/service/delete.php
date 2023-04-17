<?php

declare(strict_types=1);

use extractBank\App\service\DatabaseConnection;

require_once '../../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();

$id = $_GET['id'];

$stmt = $db->executeQuery("DELETE FROM users_for_extract WHERE id = $id");

if ($stmt) {
    echo("<script>
            window.alert('Usuario excluido com sucesso.');
            window.location.href='../../public/view/index.php';
        </script> ");
} else {
    'Erro ao tentar excluir usuario.';
}
