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
            <input name="nome">
            <!--Cria um campo para digitar-->
            <input type="submit">
            <!--Cria um botão para enviar-->
        </form>
        <?php
        if (isset($_GET['nome']))
        // Verifica se $_GET['nome'] existe e não está vaziO
        {        
            $nome = $_GET['nome'];
            
            $texto = "Prezado [nome], por favor dirija-se ao prédia central.";
            $texto_final = str_replace("[nome]",$nome,$texto);
            echo $texto_final;
        }    
        ?>
    </body>
</html>    
