<?php 
	include("functions.php");
	if( isset($_POST["fix_submit"]) ) {
		checkForClickBait();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Media Queries in IE -->
		<?php 
			define("TITLE","Clickbait Cleanup");
		?>
		<title><?php echo TITLE; ?></title>

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>

	<body>
		<div class="container">
			<h1><?php echo TITLE; ?></h1>
			<p class="lead"> Reword that awful click bait and turn it into realistic headlines with this program.</p>
			<p> Example PHP Project in a web developer course</p>
			<div class="row">

				<form class="col-sm-8 col-sm-offset-2" action="" method="post">
					<textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
					<button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Submit</button>
				</form> 

			</div>
			<?php 
				if( isset($_POST["fix_submit"] ) ) {

					//Get returned values from check for click bait
					$clickbait = checkForClickBait()[0];
					$honestHeadline = checkForClickBait()[1];

					//Call with arguments
					displayHonestHeadline($clickbait,$honestHeadline);
				}
			?>

		</div>
	</body>
</html>
