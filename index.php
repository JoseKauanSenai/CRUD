<?php

include('conexao.php');

$select = " SELECT * FROM aluno ";

$resultado = $conn->query($select);


$select2 = " SELECT * FROM professor ";

$resultadop = $conn->query($select2);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body class="bg-secondary text-white p-5">

    <form action="form.php" method="get">
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-x'x'-subtle rounded-3">

            <hr>

            <h1>Cadastrar Aluno</h1>

            <br>

            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="Nome do aluno" required name="nome">

                <span class="input-group-text"></span>

                <input type="number" class="form-control" placeholder="Insira a nota do aluno" step="0.50" min="0" max="10" required name="nota">

                <span class="input-group-text"></span>

                <input type="submit" value="Adicionar">

            </div>

            <hr>

        </div>
    </form>

    <form action="formp.php" method="get">
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-x'x'-subtle rounded-3">
            <hr>

            <h1>Cadastrar Professor</h1>

            <br>

            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="Nome do professor" required name="nomep">

                <span class="input-group-text"></span>

                <!-- <input type="text" class="form-control" placeholder="Matéria do professor" required name="materia"> -->
                
                <select class="form-select form-select-sm" aria-label="Small select example" name="materia">
                    <option value="" disabled selected>Selecione a matéria</option>
                    <option value="D.S">D.S</option>
                    <option value="Matematica">Matemática</option>
                    <option value="Humanas">Humanas</option>
                    <option value="Natureza">Natureza</option>
                    <option value="Linguagem">Linguagem</option>
                </select>

                <span class="input-group-text"></span>

                <input type="submit" value="Adicionar">

            </div>

            <hr>

        </div>
    </form>



    <div class="p-3 text-primary-emphasis bg-primary-subtle border border-x'x'-subtle rounded-3">

        <table class="table">
            <h4>Tabela dos Alunos</h4>
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Nota</th>
                <th>Ação</th>
            </thead>

            <tbody>

                <?php
                if ($resultado->num_rows > 0) {

                    while ($aluno = $resultado->fetch_object()) {
                        echo "<tr>";

                        echo "<td>";
                        echo $aluno->id;
                        echo "</td>";

                        echo "<td>";
                        echo $aluno->nome;
                        echo "</td>";

                        echo "<td>";
                        echo $aluno->nota;
                        echo "</td>";

                        echo "<td>";
                        echo "<a href='delete.php?id={$aluno->id}'>  🗑️  </a>";
                        echo "<a href='editar.php?id={$aluno->id}'>  ✏️  </a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td>Nenhum dado encontrado</td><td><td><td></td></td></td></tr>";
                }

                ?>

            </tbody>

        </table>

    </div>

    <br>
    <br>

    <div class="p-3 text-primary-emphasis bg-primary-subtle border border-x'x'-subtle rounded-3">

        <table class="table">
            <h4>Tabela dos Professores</h4>
            <thead>

                <th>ID</th>
                <th>Nome</th>
                <th>Matéria</th>
                <th>Ação</th>

            </thead>

            <tbody>

                <?php

                if ($resultadop->num_rows > 0) {
                    while ($professor = $resultadop->fetch_object()) {
                        echo "<tr>";

                        echo "<td>";
                        echo $professor->id;
                        echo "</td>";

                        echo "<td>";
                        echo $professor->nome;
                        echo "</td>";

                        echo "<td>";
                        echo $professor->materia;
                        echo "</td>";


                        echo "<td>";
                        echo "<a href='deletep.php?id={$professor->id}'>  🗑️  </a>";
                        echo "<a href='editarp.php?id={$professor->id}'>  ✏️  </a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td>Nenhum dado encontrado</td><td><td><td></td></td></td></tr>";
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

<style>
    a {
        text-decoration: none;
    }
</style>

</html>