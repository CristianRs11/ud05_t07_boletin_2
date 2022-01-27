<html>
	<body>
        <form action="ejercicio_01.php" method="post">
            <p>Escribe o primeiro número: <input type="text" name="nu1" id="N"/></p>
            <p>Escribe o segundo número: <input type="text" name="nu2" id="N"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
			if (is_numeric($num1) && is_numeric($num2)) {
                $resu = $num1 * $num2;
                echo "O resulatdo é $resu ";
            }else
            {
                echo "Escribe números";
            }
			
		?>
		
	</body>
</html>