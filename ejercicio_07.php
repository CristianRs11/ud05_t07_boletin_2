<html>
	<body>
        <form action="ejercicio_07.php" method="post">
            <p>Canto é o total da factura: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                $resu = $num1 * 1.21;
                echo "O total da factua a partir da base imponible é $resu ";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>