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
            $numero = $_GET["numero"] ?? 0;
            $string_numero = (string)$numero;
            
            $parte_inteira = (int) $numero;
            $parte_decimal = $numero - $parte_inteira;

            echo "Analisando o número <strong>". number_format($numero, 3, ",", ".")."</strong> informado pelo usuário:<br>";

            echo "<ul><li> A parte inteira do número é <strong>". number_format($parte_inteira, 0, ",", ".")."</strong></li>";

            echo "<li> A parte decimal do número é <strong>". number_format($parte_decimal, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>