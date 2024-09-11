<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário do Aluno</title>
</head>
<body>
    <form action="recebe.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="nascimento">Data de Nascimento (YYYY-MM-DD):</label>
        <input type="date" id="nascimento" name="nascimento" required><br><br>

        <label for="nota">Nota:</label>
        <input type="number" id="nota" name="nota" step="0.01" required><br><br>

        <label for="nomeMae">Nome da Mãe:</label>
        <input type="text" id="nomeMae" name="nomeMae" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
