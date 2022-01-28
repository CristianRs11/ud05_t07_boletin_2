<html>
	<body>
        <form action="ejercicio_10.php" method="post">
            <p>Cantos Mb: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                $resu = $num1 * 1000;
                echo $num1A."Mb son ".$resu."Kb";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>