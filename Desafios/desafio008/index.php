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
        $numero = (float)$_POST ?? 0;
        $raizquadrada = null;
        $raizcubica = null;
        $raizquadrada = sqrt($numero);
        $raizcubica = pow($numero, 1/3); 
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">número</label>
            <input type="number" name="numero" id="numero" step="0.001">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "<p>Analizando o número $numero, temos<br></p>";
            echo "<ul><li>A sua raiz quadrada é <strong>$raizquadrada</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>$raizcubica</strong></li></ul>";
            
        ?>
    </section>
</body>
</html>