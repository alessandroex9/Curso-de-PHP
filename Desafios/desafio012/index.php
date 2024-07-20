<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_REQUEST['segundos'];
        $valor = $segundos;
        $minutos = null;
        $horas = null;
        $dias = null;
        $semanas = null;
        $sobra = null;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos"
            min="1" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            $sobra = $segundos; 
            //semanas
            $semanas = (int)($sobra / 604800);
            $sobra = $sobra % 604800;
            //Dias
            $dias = (int)($sobra / 86400);
            $sobra = $sobra%86400;
            //Horas
            $horas = (int)($sobra / 3600);
            $sobra = $sobra % 3600;
            //Minutos
            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;
            //Segundos
            $segundos = $sobra;
        ?>

        <h2>Totalizando tudo</h2>
        <p>Abnalizando o Valor que Você digitou, <strong><?=number_format($valor, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>  
            <li><strong><?=$semanas?></strong> Semanas</li>
            <li><strong><?=$dias?></strong> Dias</li>
            <li><strong><?=$horas?></strong> Horas</li>
            <li><strong><?=$minutos?></strong> Minutos </li>
            <li><strong><?=$segundos?></strong> Segundos</li>
        </ul>
    </section>
</body>
</html>