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
        $salario = $_GET ?? 0;
        $minimo = 1380.00;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salaorio" step="0.01">
            <input type="submit" value="Calcular">
            <p>Considere o salário mínimo de <strong>R$1.380,00</strong></p>
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            if ($salario !=0) {
                $resultado = intdiv($salario, $minimo);
                echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . "que equivale a $resultado.";
            }else {
                echo "<p>O Salário não pode ser zero!</p>";
            }
        ?>
    </section>
</body>
</html>


echo "<p>Quem recebe um salário de R$1.380,00 ganha <strong></strong>"; 
        