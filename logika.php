<!DOCTYPE html>
<html>
<head>
	<title>Logika</title>
</head>
<body>
	<form method="POST" action="">
		<label>Type a number : </label>
		<input type="text" name="number">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php
	if (isset($_POST["submit"])) {
		$number = $_POST["number"];
		$raw_number = str_replace(".", '', $number);
		
		echo "<br>";
		echo "Hasil : <br>";
		printNumber($raw_number);
	}

	function printNumber($number)
	{
		$numLength = strlen($number);
		for ($i=0; $i < $numLength; $i++) { 
			echo $number[$i];

			for ($j=($numLength-$i); $j > 1 ; $j--) { 
				echo 0;
			}

			echo "<br>";
		}
	}
?>