<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Reajustador de Preços</title>
</head>
<body>
    <?php 
    $preco = $_REQUEST['preco'] ?? 0;
    $porcentagem = $_REQUEST['porcentagem'] ?? 0;
    $pFinal = $preco + (($preco * $porcentagem)/100);
    ?>
    <header>
        <h1>Curso PHP</h1>
    </header>
    <main>
        <h1>Reajustar Preços</h1>
        <section>
            <form action="" method="post">
            <label for="">Preço do Produto (R$):</label>
            <input type="number" name="preco" id="" step="0.01" value="<?=$preco?>">
            <label for="">Qual será o percentual do reajuste (<a id="porcent">0</a>%):</label>
            <input type="range" name="porcentagem" id="ran" value="<?=$porcentagem?>">
            <input type="submit" value="Reajustar" id="sub">
            </form>
        </section>
        <aside>
            <h2>Resultado do Reajuste</h2>
            <p>O produto que custava R$<?=$preco?>,00, com o <strong>aumento de <?=$porcentagem?>%</strong> vai passar a custar <strong>R$<?=$pFinal?>,00</strong> a partir de agora.</p>
        </aside>
    </main>
    <script src="script.js"></script>
</body>
</html>