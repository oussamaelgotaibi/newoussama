<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="num1">
		<select name="operator">
			<option value="+">Addition</option>
			<option value="-">Subtraction</option>
			<option value="*">Multiplication</option>
			<option value="/">Division</option>
		</select>
		<input type="text" name="num2">
		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];

			switch($operator){
				case "+":
					echo "The answer is " . ($num1 + $num2);
					break;

				case "-":
					echo "The answer is " . ($num1 - $num2);
					break;

				case "*":
					echo "The answer is " . ($num1 * $num2);
					break;

				case "/":
					echo "The answer is " . ($num1 / $num2);
					break;

				default:
					echo "Invalid operator";
			}
		}
	?>
</body>
</html>
