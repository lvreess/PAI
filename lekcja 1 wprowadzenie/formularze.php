<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>logowanie do strony</title>
</head>
<body>
	<form action="./formularze.php" method="POST">

	<p>Login</p>
	<p><input type="login" placeholder="Username" name="login" value="" /></p>
	<p><input type="password" placeholder="Password" name="haslo" value="" /></p>
	
	<input type="submit" />
	
	</form>
	<?php
	
		if(isset($_POST['login'])){
            echo "Twój login to " . htmlspecialchars($_POST['login']) . ". ";
			echo "<br>";
		}
		if(isset($_POST['haslo'])){
			echo "Twoje haslo to " . sha1(htmlspecialchars($_POST['haslo'])) . ". ";
		}
        else{
            echo "Nie podales loginu lub hasla.";
        }
		
	?>


</body>