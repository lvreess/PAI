<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="post">
     <header><h2>Wypełnij</h2></header>  
     <input type="text" name="title" placeholder="Tytuł wiadomosci" ><br />
     <input name="body" cols="50" rows="10" placeholder="Tresć wiadomosci" ><br />
     =================================================
     <p>Płeć:</p>
     <p><input type="radio" name="plec" value="m" />Mężczyzna</p>
    <p><input type="radio" name="plec" value="k" />Kobieta</p>
    <button type="submit" name="submit" >hej</button>
<?php    


        if(isset($_POST['submit']))
        {
        $tytul = $_POST['title'];
        $zawartosc = $_POST['body'];
        if($_POST['body']) echo "Witaj: .$zawartosc";
        }


         if(isset($_POST['plec']))
         {
         if($_POST['plec'] == 'm') echo "Wybrana płeć: Mężczyzna";
         else echo "Wybrana płeć: Kobieta";
        }

        


           

?>
    </form>
    </section>
</body>