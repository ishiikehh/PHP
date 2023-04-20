<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Médias Aritméticas</title>
</head>
<body>
    <?php 
    $n1 = $_REQUEST['n1'] ?? 0;
    $n2 = $_REQUEST['n2'] ?? 1;
    $n3 = $_REQUEST['n3'] ?? 0;
    $n4 = $_REQUEST['n4'] ?? 1;

    $mSimples = number_format(($n1 + $n3) / 2, 2);
    $mPonderada = number_format((($n1 * $n2) + ($n3 * $n4)) / ($n2 + $n4), 2);


    ?>
    <header><h1>Curso PHP</h1></header>
    <main><h1>Médias Aritméticas</h1>
        <section>
            <form action="" method="post">
                <label for="">1º Valor</label>
                <input type="number" name="n1" id="" value="<?=$n1?>">
                <label for="">1º Peso</label>
                <input type="number" name="n2" id="" value="<?=$n2?>">
                <label for="">2º Valor</label>
                <input type="number" name="n3" id="" value="<?=$n3?>">
                <label for="">2º Peso</label>
                <input type="number" name="n4" id="" value="<?=$n4?>">
                <input type="submit" value="Calcular Médias" id="sub">
            </form>
        </section>
        <aside>
            <h3>Calculos das Médias</h3>
            <p>Analisando os Valores: <?=$n1?> e <?=$n3?></p>
            <ul>
                <li><strong>A Média Aritmética Simples</strong> foi: <?=$mSimples?></li>
                <li><strong>A Média Aritmética Ponderada</strong> foi: <?=$mPonderada?></li>
            </ul>
        </aside>
    </main>
</body>
</html>