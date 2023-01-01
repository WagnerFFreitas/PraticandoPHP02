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
    <form method="get">
        <h4> Nome = <input type="text" name="nome" placeholder="nome" required>
        <br/>

        <h4> Altura = <input type="text" name="altura" placeholder="altura" required>
        <br/>

        <h4> Peso = <input type="text" name="peso" placeholder="peso" required>
        <br/>
        <br/>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <body>
        <?php
            if (isset($_GET['enviar'])){
                $nome = $_GET['nome'];
                $peso = $_GET['peso'];
                $altura = $_GET['altura'];
                $imc = $peso / ($altura*$altura);
                echo "<br>";
                echo "<br>";
                echo "$nome";
                echo "<br>";
                echo "<br>";
                echo "Seu IMC é = $imc";
                echo "<br>";
             
                $imc = 17;
                echo "<br>";
                if ($imc<17)
                {
                        echo "Muito abixo do peso";
                        echo "<br>";
                }
                else
                {    
                    if ($imc <= 18.49)
                    {
                    echo "Abaixo do peso";
                    echo "<br>";
                    }
                    else
                    {    
                        if ($imc <= 24.99)
                        {
                        echo "Peso normal";
                        echo "<br>";
                        }
                        else
                        {    
                            if ($imc <= 29.99)
                            {
                            echo "Acima do peso";
                            echo "<br>";
                            }
                            else
                            {
                                if ($imc <= 34.99)
                                {
                                echo "Obesidade I";
                                echo "<br>";
                                }
                                else
                                {
                                 if ($imc <= 39.99)
                                    {   
                                    echo "Obesidade II (Severa)";
                                    echo "<br>";
                                    }
                                    else
                                    {
                                    if ($imc >= 40)
                                        {
                                        echo "Obesidade III (Mobirda)";
                                        echo "<br>";
                                        }
                                    }
                                }
                            }
                        }
                    }    
                }
            }    
        ?>
    </body>
</html>    

