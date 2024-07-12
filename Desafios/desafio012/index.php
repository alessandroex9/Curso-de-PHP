<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $segundos = (int)$_POST;
        $minutos = null;
        $horas = null;
        $dias = null;
        $semanas = null;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
            echo"<p>Analizando o valor que você digitou, <strong>$segundos segudos</strong> equivalem a um total de:";
            echo"<ul><li>$semanas semanas</li>";
            echo"<li>$dias dias</li>";
            echo"<li>$horas horas</li>";
            echo"<li>$segundos segundos</li>";
        ?>
    </section>
</body>
</html>