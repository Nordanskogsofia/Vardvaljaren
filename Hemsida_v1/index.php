<!DOCTYPE html>
<html lang="sv">
	<head>
		<title>Välj vård</title>
		<link rel="stylesheet" type="text/css" href="Resources/genStyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="Resources/genScript.js"></script>
		<META charset="UTF-8"/>
	</head>
	<body>
		<?php 
		include('include/views/_header.php');
		include 'include/views/_nav.php';
		?>
		<article>
			<?php 
			include 'include/views/location.php';
			include 'include/views/symptoms.php';
			include 'include/views/preferences.php';
			include 'include/views/results.php';
			include 'include/views/register.php';
			include 'include/views/login.php';
			?>
		</article>
	</body>
</html>
