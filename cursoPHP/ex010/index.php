<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Sua Idade</title>
</head>
<body>
    <?php 
        $hoje = date('Y');
        $ano = $_REQUEST['ano'] ?? 1997;
        $data = $_REQUEST['data'] ?? $hoje;
        $idade = $data - $ano;

    ?>
    <header><h1>Curso PHP</h1></header>
    <main>
        <h1>Calculando a sua Idade</h1>
        <section>
            <form action="" method="post">
            <label for="">Em que ano você nasceu:</label>
            <input type="number" name="ano" id="" value="<?=$ano?>">
            <label for="">Quer saber sua idade em que ano? (hoje: <?=$hoje?>)</label>
            <input type="number" name="data" id="" value="<?=$data?>">
            <input type="submit" value="Qual será minha idade?" id="sub">
            </form>
        </section>
        <aside>
            <h2>Resultado</h2>
            <p>Quem nasceu em <?=$ano?> vai ter <strong><?=$idade?> Anos</strong> em <?=$data?>!</p>
        </aside>
    </main>
</body>
</html>