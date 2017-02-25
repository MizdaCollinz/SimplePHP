<!DOCTYPE html>
<html>

	<?php 
		define( "TITLE", "PHP Variables and Constants");
	?>

	<head>
		<title><?php echo TITLE; ?></title>
	</head>

	<body>
	<?php
		echo "Hello world!<br>";
		echo("Hello world!<br>");
		print('Hello world!');
	?>
	<!--  HTML Comment -->
	<?php
		//single line comment - PHP is not case sensitives
	//BOOLEAN
		$exampleVariable = "value";
		$BOOLEAN = true;
		$INTEGER = 21;
		$STRING = "Benjamin";
		$FLOAT = 3.50;

		//Display variables
		echo "Hello my name is $STRING and I am $INTEGER years old!<br>";

	?>

	</body>
</html>