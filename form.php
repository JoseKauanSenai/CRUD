
<?php

    include('conexao.php');

    $nome = $_GET ['nome'];
    $nota = $_GET ['nota'];


    $insert = "INSERT INTO aluno VALUES('','{$nome}','{$nota}')";


    $resultado = $conn->query($insert);

    if($resultado == TRUE){

        echo "<h1>Aluno adicinado com suscesso!<h1>";

    }else{
        echo "<h1>Erro ao adicionar!<h1>";
    }

    $conn->close();
    header("Location: index.php");



?>  