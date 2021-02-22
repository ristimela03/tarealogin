<?php


if(!empty($_POST["recuerda"])) {
	setcookie ("username1",$_POST["username1"],time()+ 3600);
	setcookie ("password1",$_POST["password1"],time()+ 3600);
	echo "su registro fue exitoso";
} else {
	setcookie("username1","");
	setcookie("password1","");
	echo "no se pudo realizar el registro,vuelva a intentarlo";
}

?>

<?php 
$usernameCookie = $_COOKIE['username1'];
echo "el usuario registrado es: $usernameCookie";


$archivo = fopen('usuariosr/'.$_POST['username1'].".txt",'a+');
foreach ($_POST as $valueForm) {
    $datoEscribir = '';
    if (is_array($valueForm)) {
        $datoEscribir = implode(',',$valueForm);
    }else {
        $datoEscribir = $valueForm;
    }

    fwrite($archivo,$datoEscribir);
    fwrite($archivo,"\n");
}
fclose($archivo);

?>