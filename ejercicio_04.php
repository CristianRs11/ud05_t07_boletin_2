<html>
	<body>
        <form action="ejercicio_04.php" method="post">
            <p>Escribe o pirmer número: <input type="text" name="nu1"/></p>
            <p>Escribe o segundo número: <input type="text" name="nu2"/></p>
            <p>Elixe a operación: <select name="op">
                <option value="sum">Sumar</option>
                <option value="res">Restar</option>
                <option value="mul">Multiplicación</option>
                <option value="div">División</option>
            </select>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2= $_POST['nu2'];
            $oper= $_REQUEST["op"];
			if (is_numeric($num1)) {
                switch ($oper) {
                    case 'sum':
                        $resu = $num1 + $num2;
                        echo "$num1 + $num2 = $resu";
                        break;
                    case 'res':
                        $resu = $num1 - $num2;
                        echo "$num1 - $num2 = $resu";
                        break;
                    case 'mul':
                        $resu = $num1 * $num2;
                        echo "$num1 * $num2 = $resu";
                        break;
                    case 'div':
                        $resu = $num1 / $num2;
                        echo "$num1 / $num2 = $resu";
                        break;
                }
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>