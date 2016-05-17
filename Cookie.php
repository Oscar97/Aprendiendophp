<?php
setcookie("valor_1","1");
setcookie("valor_2","2");
setcookie("valor_3","3");
?>
<html>
    <head>
        <title>ejemplo de variable reservada </title>
    </head>
    <body>
        <pre>
            <?php
            print_r($_COOKIE);
            ?>
        </pre>
    </body>
</html>