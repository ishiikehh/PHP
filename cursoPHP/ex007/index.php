<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Calcula Salarios</title>
</head>
<body>
    <?php 
    $salario = $_REQUEST['salario'] ?? 0;    
    

    if ($salario != 0){
        if ($salario < 1380){
            $minimos = 'menos de 1';
            $resto = 0;
        } else {
            $minimos = intDiv($salario, 1380);
            $resto =  $salario - (1380 * $minimos);
        }
        
        $resultado = "Quem recebe um salário de R$" . $salario . ",00 ganha <strong>" . $minimos . " salários minimos</strong> + R$" . $resto . ",00";
    } else {
        $resultado = null;
    }
    ?>
    <header>
        <h1>Curso PHP</h1>
    </header>
    <main>
        <h1>Informe Salário</h1>
        <section>
            <form action="" method="post">
                <label for="">Salário R$</label>
                <input type="number" name="salario" id="" value="<?=$salario?>">
                <p>Considere o Salário minimo de <strong>$1.380,00<strong></p>
                <input type="submit" value="Calcular" id="sub">
            </form>
        </section>
        <aside>
            <h2>
                Resultado Final
            </h2>
            <p><?=$resultado?></p>
        </aside>
    </main>
</body>
</html>