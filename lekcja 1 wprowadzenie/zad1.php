<html>
<head>




<meta charset="utf-8">
<title>powtórzenie</title>




</head>
<body>

<?php

for($count1 = 1; $count1 <= 10; ++$count1)
{
    echo "<br>";


    for($count = 1; $count <= 10; ++$count)
    {
        echo "$count * $count1". "=". $count * $count1; 
        echo "<br>";
    }
}
?>

</body>
</html>

