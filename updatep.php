<?php

    include('conexao.php');

    $id = $_GET ['id'];
    $nome = $_GET ['nome'];
    $materia = $_GET ['materia'];

    $updatep = "UPDATE professor SET nome = '$nome' , materia = '$materia' WHERE id = '$id' ";

    $resultado = $conn->query($updatep);

    if ($resultado === TRUE) {
        echo "<h1>Professor atualizado com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao atualizar!</h1>";
    }

    $conn->close();
    header("Location: index.php");

?>