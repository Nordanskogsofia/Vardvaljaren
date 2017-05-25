<?php
	session_start();
	$_SESSION['FAQ'] = "Vanliga frågor";
	header('location:faq.php');
?>