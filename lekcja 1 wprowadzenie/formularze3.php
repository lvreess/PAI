<body>
<p>Płeć:</p>
<p><input type="radio" name="plec" value="m" />Mężczyzna</p>
<p><input type="radio" name="plec" value="k" />Kobieta</p>
<p><input type="radio" name="plec" value="o" />Obojniak</p>

<p>=============</p>
<p>Ile masz lat:</p>
<form action="*">
<select name="select">
<option>10-15</option>
<option>16-20</option>
<option>21-30</option>
<option>30+</option>
</select>
</form>
<p>==============</p>
<p>Ulubiona seria gier:</p>
<p><input type="checkbox" name="gry1" value=1 />GTA</p>
<p><input type="checkbox" name="gry2" value=1 />FIFA</p>
<p><input type="checkbox" name="gry3" value=1 />Battlefield</p>
<p><input type="checkbox" name="gry4" value=1 />Settlers</p>
<p><input type="checkbox" name="gry5" value=1 />Call of duty</p>
<p><input type="checkbox" name="gry6" value=1 />Need For Speed</p>
<p><input type="checkbox" name="gry7" value=1 />Tony Hawk`s</p>
<p>==============</p>
<button type="submit" name="submit" >wyslij</button>
</body>
<?php
        if(isset($_POST['submit'])){
		echo "Komentarz:" . htmlspecialchars($_POST['body']) . ". ";   
}
?>