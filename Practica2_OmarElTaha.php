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
   <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>Pon tu ciudad: 
    <input type="text" name="ciudad"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
    
    <?php 
    echo "Mi juego favorito es ";
    echo $_GET['favgame'];
    
    
date_default_timezone_set('America/New_York');
$daysmonth = date('d');

if ($daysmonth == 31) {echo '1, 3, 5, 7, 8, 10, 12';}

if ($daysmonth == 30) {echo '4, 6, 9, 11';}

if ($daysmonth == 28) {echo '2';}
    
    ?>
    


 </body>
</html>


