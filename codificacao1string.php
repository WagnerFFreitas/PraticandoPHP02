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
            <input name="entrada" value ="<?php if (isset($_GET['entrada'])) echo $_GET['entrada']?>">
            <!--Cria um campo para digitar-->
            <input type="submit">
            <!--Cria um botão para enviar-->
        </form>
        <?php
        if (isset($_GET['entrada']))
        {
            $entrada=$_GET['entrada'];
            
            echo "Primeiro caracter: (" . $entrada[0] . ")<br>";
            echo "Segundo caracter: (" . $entrada[1] . ")<br>";
            echo "Terceiro caracter: (" . $entrada[2] . ")<br>";                   
            echo "Quarto caracter: (" . $entrada[3] . ")<br>";
            
            echo "Código primeiro: (" . ord($entrada[0]) . ")<br>";
            echo "Código segundo: (" . ord($entrada[1]) . ")<br>";
            echo "Códigoi terceiro: (" . ord($entrada[2]) . ")<br>";                   
            echo "Código quarto: (" . ord($entrada[3]) . ")<br>";
        }    
        ?>
    </body>
</html>    
