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
        /*
         * Teste simples de IMC
         * Abaixo de 17             --> Muito abixo do peso
         * Entre 17 e 18,49         --> Abaixo do peso
         * Entre 18,5 e 24,99       --> Peso normal
         * Entre 25 e 29,99         --> Acima do peso
         * Entre 30 e 34,99         --> Obesidade I
         * Entre 35 e 39,99         --> Obesidade II (Severa)
         * Entre 40                 --> Obesidade III (Mobirda)
         */
        
        $imc=29;
        /*
         *  O ponto e equivale a virgula na separação de casas decimais
         * Se a primeira condição for falsa o if ira para a proxima condição
         * e assim consecultivamente
         * && Significa E
         */
        echo "<br>";
        if ($imc<17)
        {
            echo "Muito abixo do peso";
        }
        if (($imc>=17)&&($imc<=18.49))
        {
            echo "Baixo do peso";
        }
        if (($imc>=18.5)&&($imc<=24.99))
        {
            echo "peso normal";
        }
        if (($imc>=25)&&($imc<=29.99))
        {
            echo "Acima do peso";
        }
        if (($imc>=30)&&($imc<=34.99))
        {
            echo "Obesidade I";
        }
        if (($imc>=35)&&($imc<=39.99))
        {
            echo "Obesidade II (Severa)";
        }
        if ($imc>=40)
        {
            echo "Obesidade III (Morbidade)";
        }
        ?>
    </body>
</html>
