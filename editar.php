<?php

    include('conexao.php');

    $id = $_GET ['id'];

    $select = "SELECT id , nome, nota FROM aluno WHERE id = '$id'";

    $resultado = $conn->query($select);

    $aluno = $resultado->fetch_object();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body class="bg-secondary text-white p-5">

    <form action="update.php">
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-x'x'-subtle rounded-3">

            <hr>

            <h1>Atualizar Aluno</h1>

            <br>

            <div class="input-group mb-3">

                <input type="text" value="<?= $aluno->id ?>" hidden name="id">

                <input type="text" value="<?= $aluno->nome ?>" class="form-control" placeholder="Nome do aluno" required name="nome">

                <span class="input-group-text"></span>

                <input type="number" value="<?= $aluno->nota ?>" class="form-control" step="0.50" placeholder="Insira a nota do aluno" min="0" max="10" required name="nota">

                <span class="input-group-text"></span>

                <input type="submit" value="Atualizar">

            </div>

            <hr>

        </div>
    </form>

</body>

</html>