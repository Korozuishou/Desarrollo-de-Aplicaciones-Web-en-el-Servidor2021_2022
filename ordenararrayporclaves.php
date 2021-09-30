<?php
    $array = [
        "uno" => 12,
        "dos" => 14,
        "tres" => 14,
        "cuatro" => 25,
        "cinco" => 50
    ];


    
    ksort($array);
    foreach ($array as $claves => $valores){
        echo "$claves = $valores\n";
    }

    
    $arrayB=array_flip($array);
    print_r ($arrayB);
    
    
   
    


?>