<?php
//
function a ($list = []){
    if (count($list) < 2){
        return -1;
    }

    $new = [];
    foreach ($list as $index => $ele) {
        $new[$index] = checkSum($ele);
    }

}

function checkSum($ele) {
    $sum = 0;
    $strlen = strlen($ele);
    for ($i = 0 ; $i < $strlen ; $i++){
        // $tmp = substr($ele,$i,1);
        $tmp = $ele[$i];
        $sum += $tmp;
    }

    return $sum
}

