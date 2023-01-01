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
            echo "strlen = " . strlen($entrada) . "<br>";
            echo "mb_strlen = " . mb_strlen($entrada, 'UTF8');
        }    
        ?>
    </body>
</html>    
