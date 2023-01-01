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
            <input type="text" name="tratamento">
            <input type="text" name="nome">
            <input type="text" name="sobrenome">
            <!--Cria um campo para digitar-->
            <input type="submit" value="Enviar">
            <!--Cria um botão para enviar-->
        </form>
        <?php
        if (isset($_GET['tratamento'])&&($_GET['nome'])&&($_GET['sobrenome']))
        // Verifica se $_GET['nome'] existe e não está vaziO
        {        
            $tratamento  = $_GET['tratamento'];
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];
            $nomecompleto = $nome." ".$sobrenome;
            $nomesemespacos = str_replace(' ', '', $nome.$sobrenome);            
            echo "Nome do usuário: <b>$tratamento $nomecompleto</b><br>";
            echo "<br>";
            echo "Total de caracter de com o espaço: " . strlen ($nomecompleto);
            echo "<br>";
            echo "Total de caracter de sem o espaço: ".strlen(trim($nomesemespacos));
                               
        }    
        ?>
    </body>
</html>    
