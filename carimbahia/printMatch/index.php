<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>printMatch</title>
</head>
<body>
    <main>
        <figure>
            <img src="../img/logo.png" alt="Logo Loja" class="imglogo"">
        </figure>
    <div class="centro">
        <h2>printMatch</h2>
        <form method="$_GET" action="" name="match">
            <select name="tipo" class="select">
                <option value="jato">Jato de Tinta</option>
                <option value="laser" selected>Laser</option>
                <option value="termica">Termica</option>
            </select><br>
            <select name="velocidade" class="select">
                <option value="20">20 ppm</option>
                <option value="25">25 ppm</option>
                <option value="30">30 ppm</option>
                <option value="35">35 ppm</option>
                <option value="40" selected>40 ppm</option>
                <option value="45">45 ppm</option>
                <option value="50">50 ppm</option>
                <option value="60">60 ppm</option>
            </select><br>
            <select name="color" class="select">
                <option value="color">Colorida</option>
                <option value="black" selected>Preto e Branco</option>
            </select><br>
            <button name="" class="select botao">CONFIRMA</button>
        </form>
    </div>
    </main>
</body>
</html>