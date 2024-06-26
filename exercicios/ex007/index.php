<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de conteudo</title>
</head>
<body>
    <h1>Manipulação de conteudo das strings</h1>
    <?php 
    $nome = "Alessando";
    $sobrenome = "Martins \u{1F596}";
    echo "Olá $nome $sobrenome !";
    echo 'Olá $nome !';

    $nomecompleto = $nome . $sobrenome;
    echo "Oi $nomecompleto";

    const ESTADO = "MS";
    echo "Moro no ESTADO";
    echo 'Moro no ESTADO';
    echo "Moro no ".ESTADO; 

    echo "Estamos no ano " . date('Y');

    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"Minoutauro\" $snom";

    $curso = "PHP";
    $ano = date('Y');
    echo<<< heredoc
        Estou estudadndo
            $curso em $ano
        heredoc;

    echo <<< 'nowdoc'
        Estou fazendo o 
            $curso em $ano
        nowdoc;
    ?>

</body>
</html>