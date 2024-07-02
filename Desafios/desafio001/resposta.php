<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $numero = $_GET["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O número escolhido foi $numero!<br>";          
            echo "O seu antecessor é $antecessor!<br>";
            echo "O seu secessor é $sucessor!<br>"; 
        ?>
        <button><a href="http://127.0.0.1/cursophp/Desafios/desafio001/">Voltar</a></button>
    </main>
</body>
</html>