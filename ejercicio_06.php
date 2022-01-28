<html>
	<body>
        <form action="ejercicio_06.php" method="post">
            <p>Canto mide a base: <input type="text" name="nu1"/></p>
            <p>Canto mide a altura: <input type="text" name="nu2"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
			if (is_numeric($num1) && is_numeric($num2)) {
                $resu = $num1 * $num2/2;
                echo "A área do triángulo é $resu ";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>