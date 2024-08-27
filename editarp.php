<?php

    include('conexao.php');

    $id = $_GET ['id'];

    $select = "SELECT id , nome, materia FROM professor WHERE id = '$id'";

    $resultado = $conn->query($select);

    $professor = $resultado->fetch_object();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body class="bg-secondary text-white p-5">

    <form action="updatep.php">
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-x'x'-subtle rounded-3">

            <hr>

            <h1>Atualizar Professor</h1>

            <br>

            <div class="input-group mb-3">

                <input type="text" value="<?= $professor->id ?>" hidden name="id">

                <input type="text" value="<?= $professor->nome ?>" class="form-control" placeholder="Nome do professor" required name="nome">

                <span class="input-group-text"></span>

                <select class="form-select form-select-sm" aria-label="Small select example" name="materia">
                    
                    <option selected><?= $professor->materia ?></option>
                    <option value="D.S">D.S</option>
                    <option value="Matematica">Matemática</option>
                    <option value="Humanas">Humanas</option>
                    <option value="Natureza">Natureza</option>
                    <option value="Linguagem">Linguagem</option>
                </select>

                <span class="input-group-text"></span>

                <input type="submit" value="Atualizar">

            </div>

            <hr>

        </div>
    </form>

</body>

</html>