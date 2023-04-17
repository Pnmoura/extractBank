<?php

declare(strict_types=1);

use extractBank\App\service\DatabaseConnection;

require_once '../../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();

$stmt = $db->executeQuery('SELECT * FROM users_for_extract WHERE id = id');
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $nivel = $_POST['nivel'];

    $sql = "UPDATE users_for_extract
            SET nome = '$nome', email = '$email', cargo = '$cargo', nivel = '$nivel'
            WHERE id = '$id'";
    $result = $db->executeQuery($sql);

    if($result) {
        echo ("<script>
            window.alert('Usuario cadastrado com sucesso.');
            window.location.href='../../public/view/index.php';
        </script> ");
    } else {
        'Erro ao cadastrar o Usuario.';
    }
}

?>
