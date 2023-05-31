<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de numeros aleatorios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Gerando um número aleatório</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <br>
        <?php 
            $num = rand(0, 100);
            echo "O número é $num";
        ?>
        <button onclick="javascript: history.go(0)">Gerar novo número</button>
    </section>
</body>
</html>