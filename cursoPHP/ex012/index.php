<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
    $tempo = $_REQUEST['segundo'] ?? 0;
    $restou = $tempo;
    $semana = 0;
    $dia = 0;
    $hora = 0;
    $minuto = 0;
    $segundos = 0;

    if ($tempo >= 604800){ // semanas
        $semana = intDiv($tempo, 604800);
        $tempo = $tempo - ($semana * 604800);
    }
    if ($tempo >= 86400){ // dias
        $dia = intdiv($tempo, 86400);        
        $tempo = $tempo - ($dia * 86400);
    }
    if ($tempo >= 3600){ // horas
        $hora = intdiv($tempo, 3600);
        $tempo = $tempo - ($hora * 3600);
    }
    if ($tempo >= 60){ // minutos
        $minuto = intdiv($tempo, 60);        
        $tempo = $tempo - ($minuto * 60);
    }
    if ($tempo >= 1){ // segundos
        $segundos = intdiv($tempo, 1);
    }

    
    ?>
    <header><h1>Curso PHP</h1></header>
    <main>
        <h1>Calculadora de Tempo</h1>
        <section>
            <form action="" method="post">
            <label for="">Qual o total de segundos?</label>
            <input type="number" name="segundo" id="" value="<?=$restou?>">
            <input type="submit" value="Calcular" id="sub">
            </form>
        </section>
        <aside>
            <h3>Totalizando tudo</h3>
            <p>Analizando o valor digitado, <strong><?=$restou?> segundos</strong> equivalem a um total de:</p>
            <ul>
                <li><?=$semana?> Semanas</li>
                <li><?=$dia?> Dias</li>
                <li><?=$hora?> Horas</li>
                <li><?=$minuto?> Minutos</li>
                <li><?=$segundos?> Segundos</li>
            </ul>
        </aside>
    </main>
</body>
</html>