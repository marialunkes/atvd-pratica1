<?php
include 'db.php';


$sql = "SELECT * FROM chamado";


$result = $conn -> query($sql);


if ($result -> num_rows > 0) {
    echo "<table border = '1'>
    <tr>
        <th> ID </th>
        <th> Descrição do Chamado </th>
        <th> Data de Abertura </th>
        <th> Criticidade </th>
        <th> Status </th>
    </tr>";
    while ($row = $result -> fetch_assoc()){
        echo "<tr>
                <td> {$row['id_chamado']} </td>
                <td> {$row['descricao_chamado']} </td>
                <td> {$row['data_abertura_chamado']} </td>
                <td> {$row['criticidade_chamado']} </td>
                <td> {$row['status_chamado']} </td>
                <td>
                    <a href='gerenciar_chamados.php?id={$row ['id']}'>Editar</a>
                </td>
            </tr>";
    }
    echo "</table>";    
}else {
    echo "Nenhum registro encontrado.";
}


?>
