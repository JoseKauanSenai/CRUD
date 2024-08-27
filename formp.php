<?php

    include('conexao.php');

    $nomep = $_GET ['nomep'];
    $materia = $_GET ['materia'];

    $insert2 = "INSERT INTO professor VALUES('','{$nomep}','{$materia}')";

    $resultado2 = $conn->query($insert2);

    if($resultado2 == TRUE){

        echo "<h1>Professor adicinado com suscesso!<h1>";

    }else{
        echo "<h1>Erro ao adicionar!<h1>";
    }
    
    $conn->close();
    header("Location: index.php");

?>
