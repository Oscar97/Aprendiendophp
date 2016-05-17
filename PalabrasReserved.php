<html>
    <body>
        <h2>Ejemplo de variables con protocolo POST</h2>
 
	<form method="post">
 
	Escribe tu nombre: <input type="text" name="nombre" value="<?=@$_POST['nombre'];?>"> <br> <br>
 
	Escribe tu edad: <input type="text" name="edad" value="<?=@$_POST['edad'];?>"> <br> <br>
 
	<input type="submit" value="Enviar">
 
	</form>
        <pre>
        <?php
            //print_r($_SERVER);

            //print_r($_GET);
        
            if ($_POST)
            {
                print_r($_POST);
            }
        ?>
        </pre>
    </body>
</html>
