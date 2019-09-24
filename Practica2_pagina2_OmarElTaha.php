<?php
session_start();
setcookie("username","Omar",time()+10);
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['userciudad'] = $_POST['ciudad'];
$_SESSION['id'] = 0;




//Check username and password information
if (($_SESSION['username'] == 'Omar') and
    ($_SESSION['userpass'] == '122334') and
    $_SESSION['userciudad'] == 'Badalona') {
    $_SESSION['id'] = 1;
} else {
    echo 'Lo siento pero no tienes permisos!';
    exit();     
}
?>
<html>
 <head>
  <title>Juego favorito encontrado</title>
 </head>
 <body>
<?php
echo "POST";
echo "</br>";
echo $_POST['user'];
echo "</br>";
echo $_POST['pass'];
echo "</br>";
echo $_POST['ciudad'];
echo "</br>";
echo "SESSION";
echo "</br>";
echo $_SESSION['username'];
echo "</br>";
echo $_SESSION['userpass'];
echo "</br>";
echo $_SESSION['userciudad'];
echo "</br>";
echo "</br>";
echo "Bienvenido a mi pagina, ";
echo $_COOKIE ["username"];
echo "<br/>";
$myfavgame = urlencode("BD3");
echo "<a href='Practica2_OmarElTaha.php?favgame=$myfavgame'>";
echo "Dale click para saber informacion acerca de mi juego favorito!"; 
echo "</br>";
echo "</a>";
echo "$myfavmovie";
echo "</br>";
echo "</br>";

$nombre_usuario = $_GET['user'] ??'nadie';
echo $nombre_usuario;

echo "</br>";

$nombre_usuario2 = $_GET['user'] ?? $_POST['user'] ?? 'nadie';
echo $nombre_usuario2;

echo "</br>";

date_default_timezone_set('America/New_York');
$birthday = date('d');

if ($birthday == 31){
    echo " Omar cumple años este dia";
}else{
    echo 'Lo siento, pero Omar no cumple ese dia';
    
}


?>
 </body>
</html>
