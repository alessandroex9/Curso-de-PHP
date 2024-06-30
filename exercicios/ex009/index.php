<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões aritméticas</title>
</head>
<body>
    <?php
        $resultado1 = 50/2+3**2;
        $resultado2 = 50/(2+3)**2;
        
        echo "A resposta é $resultado1";
        echo "A resposta é $resultado2";

        $resultado3 = abs(-2000);

        echo "A resposta é $resultado3";

        $resultado4 = base_convert(254, 10, 16);

        echo "A resposta é $resultado4";

        $resultado5 = ceil(3);
        $resultado6 = floor(4);
        $resultado7 = round(5);

        echo "As respostas são $resultado5, $resultado6, $resultado7";

        $resultado8 = hypot(5, 2);

        echo "A resposta é $resultado8";

        $resultado9 = intdiv(5,2);
        
        echo "A resposta é $resultado9";

        $resultado10 = min(5, -5, 4, 8, 1, 500);
        $resultado11 = max(5, -5, 4, 8, 1, 500);

        echo "A resposta é $resultado10";
        echo "A resposta é $resultado11";

        $resultado12 = pi();
        echo "A resposta é $resultado12";

        $resultado13 = pow(5,2);
        echo "A resposta é $resultado13";//Usando a função em vez do operador você perde a preferencia

        $resultado14 = sin(7);
        $resultado15 = cos(7);
        $resultado16 = tan(7);

        echo "As respostas são $resultado14, $resultado15, $resultado16";

        $resultado17 = sqrt(10);

        echo "A resposta é $resultado17";
    ?>
</body>
</html>