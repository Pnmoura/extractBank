<?php

declare(strict_types=1);
namespace extractBank\model;

use extractBank\App\service\DatabaseConnection;

require 'return.php';

$db = DatabaseConnection::getInstance();
if ($db->connect_error) {
    die('Conexão invalida' . $mysqli->connect_error());
}
echo 'Conetado ao banco local ...' . "\n\n";


$result = $db->executeQuery("SELECT * FROM users_for_extract");

if(!$result){
    die('Erro ao executar a consulta no banco: ' . $mysqli->error);
}


$row = array();
while ($row = mysqli_fetch_assoc($result)) {
    $dados[] = $row;
}


echo returnHeader($dados);