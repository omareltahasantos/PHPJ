<?php
session_unset();

setcookie("username","Omar",time()+10);
?>

<html>
 <head>
  <title>Mi Juego Favorito es <?php echo $_GET['favgame'];?></title>
 </head>
 <body>
  <form method="post" action="Practica2_pagina2_OmarElTaha.php">
  
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
   <p> Choose your fav color <input type="color" name="color"/></p>
  </form>
  
    <?php 
    /*echo "Mi juego favorito es ";
    echo $_GET['favgame'];
    
   echo "</br>";
    
date_default_timezone_set('America/New_York');
$daysmonth = date('d');

if ($daysmonth == 31) {echo '1, 3, 5, 7, 8, 10, 12';}

if ($daysmonth == 30) {echo '4, 6, 9, 11';}

if ($daysmonth == 28) {echo '2';}
*/
$fecha_actual = date("d-m-Y");
$mes_actual = date("F");
$days_actual = date("j");
$mes_actual = date("n");
//Sacamos el dia que fue ayer en fecha
  echo "</br>";
   echo "</br>";
   
   
   //Comienzo practica 2
   
   
echo "Yesterday it was, \t";
 echo date("d-m-Y",strtotime($fecha_actual."- 1 days")); 
    echo "</br>";
    //Sacamos el nombre del mes anterior al actual
 echo "The previos month is, \t";
  echo date("F",strtotime($fecha_actual."- 1 months")); 
  echo "</br>";
  //Sacamos los dias que quedan para que acabe el mes
  /*
  function dias_transcurridos($fecha_i,$fecha_f)
{
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); $dias = floor($dias);		
	return $dias;
}
  echo dias_transcurridos('2019-09-30','2019-09-30');

  */
 
$fecha1 = strtotime((date("d-m-Y")));
$fecha2 = strtotime("2019/10/31");
$res = $fecha2 - $fecha1;
$diferencia = ((($res/60)/60)/24);
 echo "</br>";

 

  echo "there are";
    echo $diferencia ; ///No funciona correctamente
   echo "days left in the month";
    echo "</br>";
    
    // Sacamos los meses que quedan para acabar el año
    
$fecha1 = strtotime((date("d-m-Y"))); //fecha actual
$fecha3 = strtotime("2019/12/31"); //fecha maxima del año
$res = $fecha3 - $fecha1;
$diferenciameses = ((($res/60)/60)/720);
    
    echo "There are  ";
    echo    round($diferenciameses) ; //Sirve para redondear un numero decimal
    echo "months left in the current year";
     echo "</br>";
       
    ?>
    
    
    <html>
 <head>
  <title>BLOCK TEXT <?php echo $_GET['favgame']; // 
  ?></title>
 </head>
 <body>
  <form method="post" action="Practica2_pagina2_OmarElTaha.php">
    <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>Pon tu ciudad: 
    <input type="text" name="ciudad"/>
   </p>
      </br>
   </br>
   <p>Enter your color of text: 
    <input type="text" name="color"/>
   </p>
   <p>Enter your font choice:
     <input type="text" name="font"/>
   </p>
   <p>Enter your size: 
     <input type="text" name="size"/>
   </p>
   </br>
   </br>
   <p>Do you want to save the following info?</p>
   </br>
   <p>Enter your color of text: 
    <label><input type="checkbox" name="cb-color" value="1" /></label>
   </p>
   <p>Enter your font choice:
     <label><input type="checkbox" name="cb-font" value="2" /></label>
   </p>
   <p>Enter your size: 
     <label><input type="checkbox" name="cb-size" value="3" /></label>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
  
  
 </body>
    <?php include "All_pages.php";?>
</html>


