<html>
	<body>
        <form action="ejercicio_08.php" method="post">
            <p>Cantas horas traballaches esta semana: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                $resu = $num1 * 12;
                echo "O salario semanal é ".$resu."€ ";
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>