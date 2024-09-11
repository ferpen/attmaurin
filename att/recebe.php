<?php
require 'aluno.php';

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$nota = $_POST['nota'];
$nomeMae = $_POST['nomeMae'];

$aluno = new Aluno($nome, $nascimento, $nota, $nomeMae);
$_SESSION['aluno'] = $aluno;

header('Location: mostra.php');
exit();
?>
