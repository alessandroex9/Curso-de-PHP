<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $dividendo = $_POST['dividendo'];
        $divisor = $_POST['divisor'];
        $resultado = intdiv($dividendo , $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
        echo "<p>Dividendo é $dividendo.</p><br>";
        echo "<p>Divisor é $divisor.</p><br>";
        echo "<p>Resultado é $resultado.</p><br>";
        echo "<p>Resto é $resto.</p><br>"; 
        ?>
    </section>
</body>
</html>