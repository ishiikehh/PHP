<?php
/**
 * Created by PhpStorm.
 * User: TAKE PRODUÇOES
 * Date: 19/05/2015
 * Time: 14:59
 */

$ss = Date("Y");
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y');
$hora = date('H');

if($hora > "6" && $hora < "12"){
    $helo = "Bom Dia";
}
elseif($hora = "12" && $hora < "18"){
    $helo = "Boa Tarde";
}else{
    $helo = "Boa Noite";}
    ?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Paradox Love | Livro</title>
            <meta charset="UTF-8"/>
            <link href="estilo.css" rel="stylesheet"/>
            <link href="http://ookamienterprise.esy.es/estiloj.css" rel="stylesheet"/>
        </head>
        <body bgcolor="#f0ffff">
        <div id="main"><figure id="logo">
                <img src="http://ookamienterprise.esy.es/logo.png">
            </figure>
            <h1>Ookami Enterprise | Livro</h1>
        </div>
        <div id="capadolivro">
            <figure id="capa">
                <img src="http://ookamienterprise.esy.es/Capa-livro.jpg">
            </figure>
        </div>
        <div id="page">
            <h2>Paradox Love</h2>
            <h3>Capitulos:</h3>
            <a id="persons" href="cap1.php">Cap #1,</a> <a id="persons" href="cap2.php">Cap #2,</a> <a id="persons" href="cap3.php">Cap #3,</a> <a id="persons" href="cap4.php">Cap #4,</a> <a id="persons" href="cap5.php">Cap #5,</a> <br/><a id="persons" href="cap6.php">Cap #6,</a> <a id="persons" href="cap7.php">Cap #7,</a> <a id="persons" href="cap8.php">Cap #8,</a> <a id="persons" href="cap9.php">Cap #9 e</a> <a id="persons" href="cap10.php">Cap #10,</a>
<br/><br/>
            <h3>Autor do Livro</h3>
            <p>Matheus S. Duarte</p>

        </div>
        <div id="footer">
            Ookami Enterprise <?php echo $ss; ?>
            <a href="http://nerdfakecompany.esy.es/nF_Studios/" id="logoInsider">Powered by nF Studios</a>
        </div>
        </body>
    </html>