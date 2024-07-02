<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_GET["valor"];
            $dolar = $real / 5.66;
            $dolar_formatado = number_format($dolar, 2);
            echo "Seus R$ $real equivalem a US$ $dolar_formatado"
        ?>
        <p><strong>Cotação fixa de R$ 5,66</strong> informada diretamente no código.</p>
        <button><a href="http://127.0.0.1/cursophp/Desafios/desafio003/">Voltar</a></button>
    </main>
</body>
</html>