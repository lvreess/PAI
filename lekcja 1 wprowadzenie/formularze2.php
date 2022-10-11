<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="post">
     <header><h2>Wypełnij</h2></header>  
     <input type="text" name="title" placeholder="Tytuł wiadomosci" ><br />
     <textarea name="body" cols="50" rows="10" placeholder="Tresć wiadomosci" ></textarea><br />
     <button type="submit" name="submit" >Zapisz</button>
<?php
        if(isset($_POST['submit'])){
        $tytul = $_POST['title'];
        $zawartosc = $_POST['body'];
        echo "<header><h1>".$tytul ."</h1></header>" ;
        echo "<p>".$zawartosc ."</p>" ;    
		echo "Komentarz:" . htmlspecialchars($_POST['body']) . ". ";   
}
?>
    </form>
    </section>
</body>