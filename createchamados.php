<?php
include "db.php";


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $descricao = $_POST ['descricao'];
    $data_abertura = $_POST ['data_abertura'];
    $criticidade = $_POST['criticidade'];
    $status = $_POST ['status'];


    $sql = "INSERT INTO chamado (descricao_chamado, data_abertura_chamado, criticidade_chamado, status_chamado) VALUE ('$descricao', '$data_abertura', '$criticidade', '$status')";


    if ($conn -> query($sql) === true) {
        echo "Cadastro do chamado adicionado <br>" ;
    } else{
        echo "Erro $sql <br>". $conn -> error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="create_chamados.php">
        Descrição do Chamado: <input type="text" name="descricao" required>
        Criticidade: <input type="text" name="criticidade" required>
        Status: <input type="text" name="status" required>
        Data de Abertura: <input type="date" name="data_abertura" required>
        <input  type="submit" value="Cadastrar">
    </form>
</body>
</html>
