<?php
/**
 * Created by PhpStorm.
 * User: TAKE PRODUÇOES
 * Date: 19/05/2015
 * Time: 15:58
 */
$cap = $_GET["cap"];
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
    <title>Paradox Love | Cap #<?php echo $cap;?></title>
    <meta charset="UTF-8"/>
    <link href="estilo.css" rel="stylesheet"/>
    <link href="estilokenichi.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="http://ookamienterprises.com/logo-icon.ico" >
<style><?php echo $inc;?></style>
</head>
<body bgcolor="#f0ffff">
<div id="main"><figure id="logo">
        <img src="http://ookamienterprise.esy.es/logo.png">
    </figure>
    <h1>Ookami Enterprise | Cap #<?php echo $cap;?></h1>
    <div id="menu">
        <nav id="menu">
            <ul type="none">
                <li><a href="http://ookamienterprises.com/paradox/loven.php?cap=<?php echo $cap;?>&modo=Noite">Modo Noite</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php
include "$cap.php";
?>
<div id="footer">
    Ookami Enterprise <?php echo $ss; ?>
    <a href="http://nerdfakecompany.esy.es/nF_Studios/" id="logoInsider">Powered by nF Studios</a>
</div><fieldset id="nav" name="Navegação"><a href="http://ookamienterprises.com/paradox/love.php<?php echo $backs; ?>" id="nav"><- <?php echo $back; ?></a> | <a href="http://ookamienterprises.com/paradox/love.php<?php echo $nexts; ?>" id="nav"><?php echo $next; ?> -></a> </fieldset>
</body>
</html>