<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $quantia = (float)$_POST;
        $cem = null;
        $cinquenta = null;
        $vinte = null;
        $dez = null;
        $cinco = null;
        $dois = null;
        $um = null;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="quantia">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="quantia" id="quantia">
            <p>*Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2, R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php
            echo"<h2>Seque de $quantia realizado</h2>";
            echo"<p>O caixa aletrônico vai te entregar as seguintes notas:";
            echo"<ul><li>".<img src="" alt="">."<li>";
        ?>
        
    </section>
</body>
</html>
<img src="" alt="">