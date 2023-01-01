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
            $array=array(1,2,3,4,5);
            $i=0;
            while($i<5)
            {
                echo $array[$i];
                echo "<br>";
                //$i=$i+1;
                $i+=1;
                //$i += 1 substitui o codigo $i=$i
                //+= recebe 1 mais
            }    
            //O trecho WHILE acima subtitui os codigos abaixo
            /*echo $array[0];
            echo "<br>";
            echo $array[1];
            echo "<br>";
            echo $array[2];
            echo "<br>";
            echo $array[3];
            echo "<br>";
            echo $array[4];
            echo "<br>";
             * 
             */
        ?>
    </body>
</html>    
