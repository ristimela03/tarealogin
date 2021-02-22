<?php


if(!empty($_POST["recuerda"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "inicio de sesion exitoso";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "fallo inicio de sesion intente nuevamente ";
}

?>

<?php 
$usernameCookie = $_COOKIE['username'];
echo "el usuario que inicio sesion es: $usernameCookie";


$archivo = fopen('usuarios/'.$_POST['username'].".txt",'a+');
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
