<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Raizes</title>
</head>
<body>
    <?php 
    $numero = $_REQUEST['number'] ?? 0;
    $raiz2 = number_format(sqrt($numero), 3, ',', '.');
    $raiz3 = number_format($numero ** (1/3), 3, ',', '.');


    ?>
    <header><h1>Curso PHP</h1></header>
    <main>
        <h1>Informe um Numero</h1>
        <section>
            <form action="" method="post">
                <label for="">Numero</label>
                <input type="number" name="number" id="" value="<?=$numero?>">
                <input type="submit" value="Calcular Raizes" id="sub">
            </form>
        </section>
        <aside>
            <h2>Resultado Final</h2>
            <p>Analizando o <strong>numero <?=$numero?></strong>, temos:</p>
            <ul>
            <li>A sua Raiz Quadrada: <?=$raiz2?></li>
            <li>A sua Raiz Cubica: <?=$raiz3?></li>
            </ul>
        </aside>
    </main>
</body>
</html>