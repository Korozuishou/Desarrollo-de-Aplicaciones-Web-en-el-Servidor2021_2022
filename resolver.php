<?php
session_start();
require_once ("funciones.php");
$i=$_SESSION['indice'];
echo $i;
echo "<br>";
$j=0;
$contenido=array();

while ($j<=$i)
{
	
	$contenido[$j]= $_SESSION['palabras'.$j];
    echo $contenido[$j]."<br>";
	$j++;
    
}
$resultadofun = existeono($i,$contenido,$entrada);
/*if ($resultadofun == 0){
    echo "No esta en el array";
} else{
    echo "Si esta en el array";
}
*/

//$res = media($contenido);
session_destroy();


?>
