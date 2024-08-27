<?php

    include('conexao.php');

    $id = $_GET ['id'];

    $delete = "DELETE FROM aluno WHERE id = '$id'";

    $resultado = $conn->query($delete);

    if ($resultado === TRUE) {
        echo "<h1>Aluno deletado com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao deletar!</h1>";
    }

    $conn->close();
    header("Location: index.php");

?>