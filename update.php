<?php

    include('conexao.php');

    $id = $_GET ['id'];
    $nome = $_GET ['nome'];
    $nota = $_GET ['nota'];

    $update = "UPDATE aluno SET nome = '$nome' , nota = '$nota' WHERE id = '$id' ";

    $resultado = $conn->query($update);

    if ($resultado === TRUE) {
        echo "<h1>Aluno atualizado com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao atualizar!</h1>";
    }

    $conn->close();
    header("Location: index.php");

?>