<?php

declare(strict_types=1);

namespace extractBank\model;

use extractBank\App\service\DatabaseConnection;

require_once '../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();

$stmt = $db->executeQuery('SELECT * FROM users_for_extract WHERE id = id');

$users = array();
foreach ($stmt as $row) {
    $user = array(
        "id" => $row['id'],
        "nome" => $row['nome'],
        "email" => $row['email'],
        "cargo" => $row['cargo'],
        "nivel" => $row['nivel'],
        "created_at" => $row['created_at'],
        "updated_at" => $row['updated_at']
    );

    $users[] = $user;
}

header('Content-Type: application/json');
echo json_encode($users);
