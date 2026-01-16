<?php
function sum(...$num){
    $res = 0;
    foreach($num as $numbers){
        $res += $numbers;
    }
    echo "Sum of numbers = $res";
}

sum(1, 3, 4);