<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroalimentado</title>
    <style>
        body{
            background-color: #555555;
        }
        main{
            padding: 20px;
            background-color: #fff;
            width: 200px;
            margin: auto;
            text-align: center;
            border-radius: 10px;
            box-shadow: 5px 5px 5px black;
        }
        input{
            padding: 8px;
            margin: 10px;
            border: 1px solid gray;
            border-radius: 8px;
        }
        span{
            color: red;
        }
    </style>
    </head>
<body>
    <?php 
    $v1 = $_REQUEST['v1'] ?? 0;
    $v2 = $_REQUEST['v2'] ?? 0;
    $soma = $v1 + $v2

    ?>
    <main>
        <h1>Calculadora</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Valor 01</label>
            <input type="number" name='v1' id='v1' value="<?=$v1?>"><br>
            <label>Valor 02</label>
            <input type="number" name='v2' id='v2' value="<?=$v2?>"><br>
            <input type="submit" value="<?php 
        if ($soma > 0){
            echo 'O resultado foi ' . $soma;
        }
        else{
            echo 'Somar';
        }

        ?>" id="res">
        </form>
        
    </main>
    <script>
        var a = document.getElementById('res');
        a.mouseenter('Somar')
        a.mouseout('<?=$soma?>')

    </script>
    </body>
</html>