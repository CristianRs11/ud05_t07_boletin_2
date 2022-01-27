<html>
	<body>
        <form action="ejercicio_02.php" method="post">
            <p>Escribe os euros: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                $resu = $num1 * 166;
                echo " $num1 euros son $resu pesetas ";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>