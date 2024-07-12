<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $preco = (float)$_POST;
        $porcentagem = (float)$_POST;
        $dividir = null;
        $multiplicar = null;
        $resultado = null;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">
            <label for="porcetagem">Qual será o percentual de reajuste?</label>
            <input type="range" name="porcentagem" id="porcentagem">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        if ($preco and $porcentagem != 0) {
            $dividir = $preco / 100;
            $multiplicar = $dividir * $porcentagem;
            $resultado = $preco + $multiplicar;
            echo"<p>O preço que custava ". numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $resultado, "BRL"). "</strong> a partir de agora.";
        }else {
            echo"<p>Não pode ser dividido por zero!";  
        }
        ?>
    </section>
    
    
</body>
</html>