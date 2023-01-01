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
            $texto = "Prezado [nome], por favor dirija-se ao prédia central.";
            $nome = "João";
            
            $texto_final = str_replace("[nome]",$nome,$texto);
            echo $texto_final;
        ?>
    </body>
</html>    