<?php
//PALABRA MAYOR CON FUNCION 
$texto = "esto es un texto para saber cual es la palabra mayor";
$palabras = explode(" ", $texto);
function mayor_array($palabras){
    $maximo = "a";
    $indice = 0;
    $tamano = count($palabras)-1;
    while ($indice <= $tamano){
        if(strcmp($palabras[$indice],$maximo)>0){
            $maximo=$palabras[$indice];
        }
        $indice++;
    }
    return  $maximo;    
}
function intercambio($indice,$palabras,$texto){
    $posicion = 0;
    
    $palabras = explode(" ",$texto);
    $tamano = count($palabras)-1;
    While($indice <= $tamano){
         if($palabras[$indice] > $palabras[$indice])
            {
                $posicion     = $palabras[$indice];
                $palabras[$indice] = $palabras[$indice];
                $palabras[$indice] = $posicion;
            }
        }
            return $posicion;

}
$maximo=mayor_array($palabras);
echo " La palabra mayor es: ". $maximo;
$posicion=intercambio($tamano,$indice,$texto,$palabras);
echo $posicion;

?>

