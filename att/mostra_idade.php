<?php
require 'aluno.php';

$aluno = $_SESSION['aluno'];
$idade = $aluno->idade();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Idade do Aluno</title>
</head>
<body>
    <h1>Idade do Aluno</h1>
    <p><?php echo $aluno->getNome() . ", " . $idade . " anos"; ?></p>
    <a href="mostra.php">Voltar</a><br>
    <a href="sair.php">Sair</a>
</body>
</html>
