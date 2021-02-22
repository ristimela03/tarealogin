<?php

?>
<form action="cookies2.php" method="post" style="border: 2px dotted green; text-align:center; width: 400px;">

	<p>
		Username: <input name="username1" type="text" value="<?php if(isset($_COOKIE["username1"])) { echo $_COOKIE["username1"]; } ?>">
	</p>
	<p>Password: <input name="password1" type="password1" value="<?php if(isset($_COOKIE["password1"])) { echo $_COOKIE["password1"]; } ?>">
	</p>
    Genero: 
        <input type="checkbox" value="Hombre" name="Genero[]">hombre</input>
        <input type="checkbox" value="Mujer" name="Genero[]">mujer</input>
        <input type="checkbox" value="Indefinido" name="Genero[]">Indefinido</input>
    
	<p><input type="checkbox" name="recuerda" value= registrarme> resgistrarme
	</p>
	<p><input type="submit" value="continuar"></span></p>       
</form>
