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
        <?php
            $nome = "Pedro Silva";
            echo "Total de caracter de ($nome): ". strlen($nome);
            
            echo "<br>";
            $nome = "Pedro Silva ";
            // Aqui sera contado o espaço no final do nome
            echo "Total de caracter ($nome): " . strlen ($nome);
            // strlen este comando conta a quantidade de caracter
            
            echo "<br>";
            $nome2 = trim($nome);
            /*
             *  trim : Este comando auxilia o comando strlen a 
             * contar apenas os caracteres e ignora os espaços
             */
            echo "Total de caracter de ($nome2) " .strlen ($nome);
            
            echo "<br>";
            echo "Tambem podemos fazer: " . strlen(trim($nome));
        ?>
    </body>
</html>    