<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = (float)$_GET['salario'] ?? 0;
        $minimo = 1412;
        $resto = null;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salaorio" step="0.01" value="<?=$salario?>" min="0">
            <input type="submit" value="Calcular">
            <p>Considere o salário mínimo de <strong>R$<?=number_format($minimo,2,",", ".")?></strong></p>
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $totaldesal = intdiv($salario, $minimo);
            $restodesal = $salario % $minimo;

            if ($restodesal != 0) {
                echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " que equivale a <strong>$totaldesal salário(s) mínimo(s)</strong> + " . numfmt_format_currency($padrao, $restodesal, "BRL");
            }else {
                echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " que equivale a <strong>$totaldesal salário(s) mínimo(s)</strong>";
            }
            
        ?>
    </section>
</body>
</html>     