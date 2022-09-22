<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>petla rysowanie</title>
</head>
<body>

	<?php
		
		for($wysokosc = 1; $wysokosc <= 5; ++$wysokosc)
		{
			
			for($szerokosc = 1; $szerokosc <= 4; ++$szerokosc)
			{
				if($wysokosc == 1 OR $wysokosc == 5)
				{
					echo "*";
				}
				elseif($szerokosc == 1 OR $szerokosc == 4)
				{
					echo "*";
				}
				else 
				{
					echo '_';
				}
			}
			echo "<br>";
		}
		
	?>


</body>