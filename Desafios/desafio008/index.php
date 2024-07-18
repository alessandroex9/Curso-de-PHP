<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_POST['num'] ?? 0;
        $raizquadrada = null;
        $raizcubica = null;
        $raizquadrada = sqrt($numero);
        $raizcubica = pow($numero, 1/3); 
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="num">número</label>
            <input type="number" name="num" id="num" step="0.001" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "<p>Analizando o número <strong>$numero</strong>, temos<br></p>";
            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($raizquadrada, 2, ",", ".") . "</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>". number_format($raizcubica, 2, ",", ".")."</strong></li></ul>";
            
        ?>
    </section>
</body>
</html>