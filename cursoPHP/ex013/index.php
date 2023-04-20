<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Caixa Eletronico</title>
</head>
<body>
    <?php 
        $valor = $_REQUEST['valor'] ?? 0;
        $restou = $valor;
        $n100 = 0;
        $n50 = 0;
        $n20 = 0;
        $n10 = 0;
        $n05 = 0;

        if ($valor >= 100){ // notas de 100
            $n100 = intDiv($valor, 100);
            $valor = $valor - ($n100 * 100);
        }
        if ($valor >= 50){ // notas de 50
            $n50 = intdiv($valor, 50);        
            $valor = $valor - ($n50 * 50);
        }
        if ($valor >= 20){ // notas de 20
            $n20 = intdiv($valor, 20);
            $valor = $valor - ($n20 * 20);
        }
        if ($valor >= 10){ // notas de 10
            $n10 = intdiv($valor, 10);        
            $valor = $valor - ($n10 * 10);
        }
        if ($valor >= 5){ // notas de 5
            $n05 = intdiv($valor, 5);
        }


    ?>
    <header><h1>Curso PHP</h1></header>
    <main>
        <h1>CAIXA ELETRONICO</h1>
        <section>
            <form action="" method="post">
                <label for="">Qual o valor a ser sacado?</label>
                <input type="number" name="valor" id="" value="<?=$restou?>" step="5">
                <input type="submit" value="Sacar" id="sub">
            </form>
        </section>
        <aside>
            <h3>Saque:</h3>
            <p>O Caixa Eletronico vai te entregar as seguintes notas:</p>
            <ul>
                <?php if($n100 >= 1){echo '<li><img src="nota100.jpg" alt="" width="150"> X'. $n100 .'</li>';}?>
                <?php if($n50 >= 1){echo '<li><img src="nota50.jpg" alt="" width="145"> X'. $n50 .'</li>';}?>
                <?php if($n20 >= 1){echo '<li><img src="nota20.jpg" alt="" width="140"> X'. $n20 .'</li>';}?>
                <?php if($n10 >= 1){echo '<li><img src="nota10.jpg" alt="" width="135"> X'. $n10 .'</li>';}?>
                <?php if($n05 >= 1){echo '<li><img src="nota5.jpg" alt="" width="120"> X'. $n05 .'</li>';}?>
            </ul>
        </aside>
    </main>
</body>
</html>