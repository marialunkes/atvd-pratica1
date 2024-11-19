<?php
include "db.php";


$id = $_GET['id'];


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $criticidade = $_POST ['criticidade'];
    $status = $_POST ['status'];


    $sql = "UPDATE chamado SET criticidade_chamado ='$criticidade', status_chamado = '$status' WHERE id = $id ";


    if ($conn -> query($sql) === true) {
        echo "Chamado atualizado com sucesso<br>" ;
    } else{
        echo "Erro:". $sql. "<br>". $conn -> error;
    }
    $conn -> close();
    header ("Location: vizualizar_chamado.php");
    exist();
}
$sql = "SELECT * FROM chamado WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="gerenciar_chamados.php?id= <?php echo $row['id']; ?>">
        Criticidade: <input type="text" name="criticidade" required>
        Status: <input type="text" name="status" required>
        <input  type="submit" value="Atualizar">
    </form>
    <a href="vizualizar_chamado.php">Vizualizar chamados</a>
    <a href="create_chamados.php">Cadastrar Chamados</a>
</body>
</html>

