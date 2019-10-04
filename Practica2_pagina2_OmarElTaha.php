<?php
session_start();
/*setcookie("username","Omar",time()+10);
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['userciudad'] = $_POST['ciudad'];





//Check username and password information
/*if (($_SESSION['username'] == 'Omar') and
    ($_SESSION['userpass'] == '122334') and
    $_SESSION['userciudad'] == 'Badalona') {
    $_SESSION['id'] = 1;
} else {
    echo 'Lo siento pero no tienes permisos!';
    exit();     
}
*/

$_SESSION['color'] = $_POST['color'];
$_SESSION['font'] = $_POST['font'];
$_SESSION['size'] = $_POST['size'];



?>

<html>
 <head>
  <title></title>
 </head>
 <body>


 







<?php
/*
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
      echo "</br>";
           echo "</br>";
       
  */     

$color=  $_POST['color'];
$font= $_POST['font'];
$size = $_POST['size'];
 //Concatenar con los puntos 

echo '<div style="color:'.$color.'; font-family:'.$font.'; font-size:'.$size.';">HOLA</div>';



//echo '<p style="'.$['curl'].'"></p>'

//echo '<td><a href="'.$row['curl'].'">'.$row['curl'].'</a></td>';

 
 



function mostrar_horario() { //Funcion para mostrar el horario
 
   //Guardamos el formato del mes de estilo 01 en la variable
    $mesActual = date('m');
 
    // Si estamos entre el 1 de junio y el 31 de octubre (incluidos)
    if ( $mesActual >= '06' && $mesActual <= '10' ) {
 
        return 'Good summer'; //Devuelve good summer
            echo "</br>";
             echo "</br>";
    // Si estamos entre el 1 de enero y el 31 de marzo (incluidos)
    }if( $mesActual >= '01' && $mesActual <= '03'){
        
        return 'Good winter'; // devuelve good winter
         echo "</br>" ;
         echo "</br>";
    }
 
}
   echo "</br>";
      echo "</br>";

echo mostrar_horario();


    session_start();
    $colorv2= "he entrado en color";
     $fuentesv2= "he entrado en fuentes";
     $tamaño = "he entrado en tamaño";
if($_POST['cb-color'] == 1){
    echo  $colorv2;
     echo "</br>";
    setcookie("color",$_POST['color'],time()+10);
    echo $_COOKIE ["color"];
     echo "</br>";
    
};
if($_POST['cb-font'] == 2){
    echo $fuentesv2;
     echo "</br>";
    setcookie("font",$_POST['font'],time()+10);
echo $_COOKIE ["font"];
 echo "</br>";
    
};

if($_POST['cb-size'] == 3){
    echo  $tamaño;
     echo "</br>";
    setcookie("size",$_POST['size'],time()+10);
echo $_COOKIE ["size"];
 echo "</br>";
    
};




 echo "</br>"; echo "</br>";

 echo "</br>";





 echo "<p>Has entrado en mi pagina  </p>";
    if ( !isset( $_SESSION['contadorvisitas'] ) ) 
     $_SESSION['contadorvisitas'] = 1;
     else $_SESSION['contadorvisitas']++;
     echo  $_SESSION['contadorvisitas'];
    echo "veces";



?>

 </body>
  <?php include "All_pages.php";?>
</html>

