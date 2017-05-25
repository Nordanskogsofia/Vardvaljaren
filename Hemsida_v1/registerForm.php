<!DOCTYPE html>
<html lang="sv">
	<head>
		<title>Registrera dig</title>
		<link rel="stylesheet" type="text/css" href="Resources/genStyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="Resources/genScript.js"></script>
		<META charset="UTF-8"/>
	</head>
	<body>
	<div id="registerForm">
		<form name="registerForm" onsubmit="return validate()" method="POST">
		Användarnamn:<input type="text" placeholder="">
		Lösenord:<input type="text" placeholder="">
		<input type="radio" name="customerType" value="Vårdinstans"> Vårdinstans
		<input type="radio" name="customerType" value="Vårdsökare"> Vårdsökare
		
		<input type="submit" value="Skapa användare" class="registerForm"/>
	</div>
	</body>
</html>
