<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizador de Número Real</h1>
        <?php 
            $numero = $_GET;
            $string_numero = (string)$numero;
            $partes = explode(',', $string_numero);
            $parte_inteira = $parte[0];
            $parte_decimal = isset($parte[1]) ? $parte[1] : '0';

            echo "Analisando o número $numero informado pelo usuário:<br>";
            echo "A parte inteira do número é $parte_interia.<br>";
            echo "A parte decimal do número é $parte_decimal<br>";
        ?>
        <button><a href="http://127.0.0.1/cursophp/Desafios/desafio005/"></a>Voltar</button>
    </main>
</body>
</html>