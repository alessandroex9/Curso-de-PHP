<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 80px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $quantia = $_REQUEST['quantia'];
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="quantia">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="quantia" id="quantia" min="5" value="<?=$quantia?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
        <?php
            $resto = $quantia;
            //Saque R$100
            $total100 = (int)($resto / 100);
            $resto = $resto % 100;
            //Saque R$50
            $total50 = (int)($resto / 50);
            $resto = $resto % 50;
            //Saque 10
            $total10 = (int) ($resto / 10);
            $resto = $resto % 10;
            //Saque 5
            $total5 = (int) ($resto / 5);
            $resto = $resto % 5;
        ?>

    <section>
        <h2>Saque de R$ <?=number_format($quantia, 0, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:<br></p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$total100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$total50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$total10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$total5?></li>
        </ul>
        <p>Restou ainda R$ <?=$resto?></p>

        
    </section>
</body>
</html>
<img src="" alt="">