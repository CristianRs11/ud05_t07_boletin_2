<html>
	<body>
        <form action="ejercicio_03.php" method="post">
            <p>Escribe as pesetas: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                $resu = $num1 / 166;
                echo " $num1 pesetas son $resu euros ";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>