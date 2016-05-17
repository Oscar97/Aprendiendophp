<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $a = 1;
            $b = "3.40";
            $c = "contenedor de codigo PHP 5.";
            $nuestravariable = array();
            echo $a."<br>".$b."<br>".$c."<br>".$a*$b;
            
            function ejemploVariable()
            {
                global $a,$b,$c;
                echo "<br>".$a."<br>".$b."<br>".$c;
            }
            
            $nuestravariable[0]="posicion 0.";
            $nuestravariable[1]="posicion 1.";
            $nuestravariable[2]="posicion 2.";
            $nuestravariable[3]="posicion 3.";
            
            echo "<pre>";
            print_r($nuestravariable);
            echo "<pre>";

        ?>
    </body>
</html>