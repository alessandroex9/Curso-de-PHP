<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatórizador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
        $numero_aleatorio = rand(0, 100); 
        echo "O valor gerado foi $numero_aleatorio"
        ?>
        <button><a href="http://127.0.0.1/cursophp/Desafios/desafio002/">Gerar outro</a></button>
    </main>
</body>
</html>