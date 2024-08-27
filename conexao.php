<?php

    $hostname = "localhost:3307";
    $bancodedados = "sesi";
    $usuario = "kauan";
    $senha = "2213";
                                                          
    $conn = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if ($conn->connect_error){
        die( "Falha ao conectar" . $conn->connect_error);
    }else{
        echo "Conectado ";
    }


?> 