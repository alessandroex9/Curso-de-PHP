<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Tipos Primitivos de Variaveis em PHP</h1>
    <?php
        //0x = hexadecimal 0b = binário 0 = Octal
        $num = 300; //Tipo int
        $flutuante = 1.6; //Tipo Float
        $caracteres = "Alessandro"; //Tipo char
        $booleano = false; //bool


        var_dump($num);
        var_dump($flutuante);
        var_dump($caracteres);
        var_dump($booleano);

        //Para forçar uma variavel a ser do tipo
        $num2 = (int) 3e2; //coerção
        var_dump($num2);

        $vet = [6, 2.5, "Maria", 3, false]; //Var array
        
        var_dump($vet);
        class pessoa { //Object
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>