<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <form>
        Calculador o fator do número: <input name="numero"><br>
        <input type="submit">
    </form>
    <hr>
    <?php
        if (isset($_GET['numero']))
        {
            $entrada = $_GET['numero'];
            $numero = $_GET['numero'];
            $fatorial = $numero;
            $numero = $numero - 1;
            if ($fatorial == 0)
                $fatorial = 1;
            while ($numero > 1)
            {
                $fatorial = $fatorial* $numero;
                $numero = $numero - 1;
            }
                echo "O fatorial do número $entrada é $fatorial";
        }       
    ?>
    </body>
</html>    