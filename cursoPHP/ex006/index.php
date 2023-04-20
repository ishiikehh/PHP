<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleex.css">
    <title>Anatomia Divisão</title>
</head>
<body>
    <?php 
    $dividendo = $_REQUEST['dividendo'] ?? 0;
    $divisor = $_REQUEST['divisor'] ?? 1;

    $resto = $dividendo % $divisor;
    $divInt = intdiv($dividendo, $divisor);

    ?>
    <header>
        <h1>Curso PHP</h1>
    </header>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <section>
            <form action="" method="post">
                <label for="">Dividendo</label>
                <input type="number" value="<?=$dividendo?>" name="dividendo">
                <label for="">Divisor</label>
                <input type="number" value="<?=$divisor?>"name="divisor">
                <input type="submit" value="Analisar" id="sub">
            </form>
        </section>
        <aside>
           <h2>Esturutura da Divisão</h2>
           <table>
            <tr>
                <td><?=$divisor?></td>
                <td id="d1"><?=$dividendo?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td id="d2"><?=$divInt?></td>
            </tr>
           </table>
        </aside>
    </main>
</body>
</html>
