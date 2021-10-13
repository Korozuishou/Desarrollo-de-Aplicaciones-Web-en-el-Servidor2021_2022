<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $numero3 = $_GET['numero3'];

    

    $suma = pow($numero1,2) + pow($numero2,2) + pow($numero3,2);
    echo "Suma ".$suma."\n"; 
    
    
    $resta = $numero1 - $numero2 - $numero3;
    echo "Resta: ".$resta."\n";

    if ($numero1 > $numero2 && $numero1 > $numero3){
        echo "Numero Mayor: ".$numero1."\n";
    }else{
        if ($numero2 > $numero1 && $numero2 > $numero3){
            echo "Numero Mayor: ".$numero2."\n";
        } else{
            echo "Numero Mayor: ".$numero3."\n";
        }
    }

    

    

    
       
?>