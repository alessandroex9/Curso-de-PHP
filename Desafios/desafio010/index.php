<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $anoatual = date("Y");
        $anoparacalcular = $_GET['anocalcular'] ?? $anoatual;
        $anodenascimento= $_GET['anonascimento'] ?? '';
        $idade = "";
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="anonascimento">Em que ano você nasceu?</label>
            <input type="number" name="anonascimento" id="anonascimento" min="1900" max="<?=$anoatual?>" value="<?=$anodenascimento?>">
            <label for="anocalcular">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoatual?></strong>)</label>
            <input type="number" name="anocalcular" id="anocalcular" min="1900" value="<?=$anoparacalcular?>">
            <input type="submit" value="Qual será minha Idade?">
        </form>
    </main>
    <section>
        
        <h2>Resultado</h2>
        <?php 
            if ($anodenascimento <= $anoparacalcular ) {
                $idade = $anoparacalcular - $anodenascimento;
                echo "<p>Quem nasceu em $anodenascimento vai ter <strong>$idade anos</strong> em $anoparacalcular!";
            }
        ?>
    </section> 
</body>
</html>