<?php

declare(strict_types=1);
namespace extractBank\model;

use extractBank\App\service\DatabaseConnection;

require_once '../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();

$stmt = $db->executeQuery('SELECT * FROM users_for_extract WHERE id = id');

$users = array();
foreach ($stmt as $row){
    echo "Id: " . $row['id'] . "\n";
    echo "Nome: " . $row['nome'] . "\n";
    echo "Email: " . $row['email']. "\n";
    echo "Cargo: " . $row['cargo']. "\n";
    echo "Nivel: " . $row['nivel']. "\n";
    echo "created_at :" . $row['created_at']. "\n";
    echo "updated_at: " . $row['updated_at']. "\n\n";
}

header('Content-Type: application/json');
echo json_encode($users);