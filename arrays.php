<!DOCTYPE html>

<htmL>
	<head>
		<?php
			define("TITLE","Sample PHP Title");
		?>
		<title> <?php echo TITLE; ?> </title>

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>
	<body>
		<h1><?php echo TITLE; ?></h1>

		<?php
			$user = array(
					"benc",
					"Benjamin C",
					21,
					"male",
					"Auckland"
				);
			/*	Typical array using numerical index associativity*/
			
			//Echo the values
			echo $user[0] ."<br>";
			echo $user[1] ."<br>";
			echo $user[2] ."<br>";
			echo $user[3] ."<br>";
			echo $user[4] ."<br>";

			//Use associative ARRAYS
			$people = array(
						"username" => "bacon",
						"fullname" => "Mister Bacon",
						"age" => 21,
						"gender" => "male"
				);

			//Access the associative array

			echo $people["username"] ."<br>";
			echo $people["fullname"] ."<br>";
			echo $people["age"] ."<br>";
			echo $people["gender"] ."<br>";

			echo "<hr>";

			//Multidimensional Array
			$employees = array(
							array(
								"username" => "bacon",
							"fullname" => "Miss Bacon",
							"age" => 21,
							"gender" => "male"

							),
							array(
								"username" => "bacon",
								"fullname" => "Miss Pancakes",
								"age" => 21,
								"gender" => "male"

							),
							array(
								"username" => "bacon",
								"fullname" => "Miss PeanutButter",
								"age" => 21,
								"gender" => "male"

							)
				);

			echo $employees[0]["fullname"]."<br>";
			echo $employees[1]["fullname"]."<br>";
			echo $employees[2]["fullname"]."<br>";

		?>


	</body>
</htmL>
