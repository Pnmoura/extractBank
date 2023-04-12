<?php

declare(strict_types=1);

use extractBank\App\service\DatabaseConnection;

require_once '../../App/service/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();
$conn = $db->getConnection();
$id = $_GET['id'];

if ($id > 0){

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $cargo = $_GET['cargo'];
    $nivel = $_GET['nivel'];

    // Executa a consulta SQL para atualizar o registro
    $sql = "UPDATE users_for_extract
            SET nome = '$nome', email = '$email', cargo = '$cargo', nivel = '$nivel'
            WHERE id = $id";
    $db = $conn->query($sql);


    //echo $sql;
    if (!$db) {
        echo ("<script>
            window.alert('Registro atualizado com sucesso!.');
        </script> ");
    }
} else {
    echo "Registro não encontrado.";
}



// Verificar se os dados do formulário foram enviados
//if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cargo']) && isset($_POST['nivel'])) {
//    // Validar os dados do formulário
//    $nome = htmlspecialchars($_POST['nome']);
//    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//    $cargo = htmlspecialchars($_POST['cargo']);
//    $nivel = htmlspecialchars($_POST['nivel']);
//
//    // Criar a instrução SQL para atualizar o banco de dados
//    $sql = "UPDATE users_for_extract SET nome='$nome', email='$email', cargo='$cargo', nivel=$nivel WHERE id=['id']";
//
//    // Executar a instrução SQL
//    if(mysqli_query($conn, $sql)) {
//        echo "Dados atualizados com sucesso!";
//    } else {
//        echo "Erro ao atualizar os dados: " . mysqli_error($conn);
//    }
//}
?>
