<?php

use extractBank\App\service\DatabaseConnection;

include_once 'DatabaseConnection.php';

$db = DatabaseConnection::getInstance();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $nivel = $_POST['nivel'];

$sql = "INSERT INTO users_for_extract (nome, email, cargo, nivel) VALUES ('$name','$email','$cargo','$nivel')";
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


