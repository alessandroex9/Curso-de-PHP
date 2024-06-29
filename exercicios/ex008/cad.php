<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processo</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ??"Sem nome";
            $sobrenome = $_GET["sobrenome"] ??"desconhecido";
            //var_dump($_GET); //A super global request é a junção de $_GET, $_POST e $_COOKIES

            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome!</strong> Este é meu site!"
        ?>
        <p><a href="javascrip:history.go(-1)">Voltar para a página anterior</a></p>
 
    </main>
</body>
</html>