<?php
	//edit.php
	//id mida muudame
	echo $_GET["edit"];
	
	//saada k�tte k�ige uuemad andmed selle id kohta
	//numbrim�rk ja v�rv
	

?>

<h2>Muuda autod</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<label for="number_plate" >auto nr</label><br>
	<input id="number_plate" name="number_plate" type="text" value=""><br><br>
	<label for="color">Varv</label><br>
	<input name="color" type="text" value=""> <br><br>
	<input type="submit" name="uptade" value="Salvesta">
	</form> 