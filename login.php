<?php

?>
<form action="cookies1.php" method="post" style="border: 2px dotted green; text-align:center; width: 400px;">

	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
	</p>
	<p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
	</p>
	<p><input type="checkbox" name="recuerda"> recordar usuario
	</p>
	<p><input type="submit" value="registrarme"></span></p>       
</form>

