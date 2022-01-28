<html>
	<body>
        <form action="ejercicio_11.php" method="post">
            <p>Cantos Kb: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                $resu = $num1 / 1000;
                echo $num1."Kb son ".$resu."Mb";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>