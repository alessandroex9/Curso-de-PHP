<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009 do curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = (float)$_POST;
        $peso1 = (float)$_POST;
        $valor2 = (float)$_POST;
        $peso2 = (float)$_POST;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="valor1">1 Valor</label>
            <input type="number" name="valor1" id="valor1" step="0.01">
            <label for="peso1">1 Peso</label>
            <input type="number" name="peso1" id="peso1" step="0.01">
            <label for="valor2">2 Valor</label>
            <input type="number" name="valor2" id="valor2" step="0.01">
            <label for="peso2">2 Peso</label>
            <input type="number" name="peso2" id="peso2" step="0.01"> 
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
        
            if ($valor1 and $valor2 !=0) {
                $mediasimples = $valor1 / $valor2;
                $somavalores = $valor1 + $valor2;
                $somapesos = $peso1 + $peso2;
                $mediaponderada = $somavalores / $somapesos;

                echo "<p>Analisando os valores $valor1 e $valor2:</p>";
                echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediasimples.</li>";
                echo "<li>A <strong>Média Aritmetica Ponderada</strong> com pesos $peso1 e $peso2 é igual a $mediaponderada.</li></ul>";
            }else {
                echo "<p>As notas não podem ser zero!<br></p>";
            }           
        ?>
    </section>
</body>
</html>