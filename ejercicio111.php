<?php
require_once("funcion/funciones.php");
session_start();
$i=$_SESSION['indice'];
$i=$i-2;
$j=0;
$contenido=array();
while ($j<=$i)
{
	array_push($contenido,$_SESSION['num_letra_palabra'.$j]);
	//$contenido[$j]= $_SESSION['num_letra_palabra'.$j];/
	$j++;
}
$salida=longitud($contenido);
print_r($salida);
?>