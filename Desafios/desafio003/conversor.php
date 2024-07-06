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
            $real = $_GET["valor"] ?? 0;
            $dolar = $real / 5.66;
            //Formatação de moedas com internacionalização!
            //Biblioteca intl (Internalization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <p><strong>Cotação fixa de R$ 5,66</strong> informada diretamente no código.</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>