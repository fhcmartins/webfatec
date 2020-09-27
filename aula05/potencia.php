<?php

$v1 = $_POST["base"];
$v2 = $_POST["expoente"];

function pot($base, $exp){
    
    $i = 0;
    $res = 1;

    for($i = 1; $i <= $exp; $i++){
        
        $res = $base * $res;
    }

    return $res;

}

echo pot($v1, $v2);
