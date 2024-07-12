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
        $anoparacalcular = (int)$_POST;
        $anodenascimento= (int)$_POST; 
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="anonascimento">Em que ano você nasceu?</label>
            <input type="number" name="anonascimento" id="anonascimento">
            <label for="anoparacalcular">Quer saber sua idade em que ano? (atualmente estamos em $anoatual)</label>
            <input type="number" name="anoparacalcular" id="anoparacalcular">
            <input type="submit" value="Qual será minha Idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            if ($anoparacalcular > $anoatual){
                echo "<p>O ano não pode ser maior que o ano atual. ($anoatual)</p>";
            }elseif ($anoparacalcular < $anoatual){
                $idade = $anoparacalcular - $anodenascimento;
                echo "<p>Quem nasceu em $anodenascimento vai ter <strong>$idade</strong> anos em $anoparacalcular!";
            }
        ?>
    </section> 
</body>
</html>