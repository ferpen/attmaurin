<?php
require 'aluno.php';

$aluno = $_SESSION['aluno'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados do Aluno</title>
</head>
<body>
    <h1>Dados do Aluno</h1>
    <p>Nome: <?php echo $aluno->getNome(); ?></p>
    <p>Data de Nascimento: <?php echo $aluno->getNascimento(); ?></p>
    <p>Nota: <?php echo $aluno->getNota(); ?></p>
    <p>Nome da Mãe: <?php echo $aluno->getNomeMae(); ?></p>
    <a href="mostra_idade.php">Mostrar Idade</a><br>
    <a href="sair.php">Sair</a>
</body>
</html>
