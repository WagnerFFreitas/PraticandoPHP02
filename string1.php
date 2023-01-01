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
            $nome = "Pedro";
            echo "Nome do usuário: <b>$nome</b><br>";
            /*
             * Dentro de uma string temos uma variável
             * "Nome do usuário: <br>$nome</br><br>"
             * a variável e entre o código html
             * <br>$nome</br><br>
             * O código html tambem está definino que 
             * tudo dentro fique em negrito
             */
            
            $sobrenome = "Silva";
            $nomecompleto = $nome." ". $sobrenome;
            // O ponto usado acima, nada mais e do que a concatenação
            echo "Nome completo: <b>$nomecompleto</b>";
            // <b> Significa netrito em html
        ?>
    </body>
</html>    