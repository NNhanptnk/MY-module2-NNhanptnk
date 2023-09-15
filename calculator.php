<!DOCTYPE html>
<html>
<head>
	<title>My First PHP Script</title>
</head>
<body>

<form>
	<input type="text" name="num1" placeholder="Number 1">
	<input type="text" name="num2" placeholder="Number 2">
	<br>
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<button type="submit" name="submit" value="submit">
		Calculate
	</button>
</form>

<p> Answer : </p>
<?php
	if (isset($_GET['submit'])) {
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		$operator = $_GET['operator'];
		if (!is_numeric($num1) || !is_numeric($num2)) {
			echo "You must enter a number.";
		}
		else {
			switch($operator){
				case "None":
					echo "Please select a method.";
				break;
				case "Add":
					echo $num1 + $num2;
				break;
				case "Subtract":
					echo $num1 - $num2;
				break;
				case "Multiply":
					echo $num1 * $num2;
				break;
				
				case "Divide":
					if ($num2 == 0) {
						echo "Cannot divide by 0 !";
					}
					else {
						echo $num1 / $num2;
					}
				break; 
			}
		}
	}

?>


</body>
</html>