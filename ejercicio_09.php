<html>
	<body>
        <form action="ejercicio_09.php" method="post">
            <p>Canto mide o radio: <input type="text" name="nu1"/></p>
            <p>Canto mide a altura: <input type="text" name="nu2"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
			if (is_numeric($num1) && is_numeric($num2)) {
                $resu = 3.14 * $num1 * $num1 *$num2 / 3 ;
                echo "A área do cono é $resu ";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>