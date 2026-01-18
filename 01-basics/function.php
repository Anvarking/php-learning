<?php
function sum(...$num){
    $res = 0;
    foreach($num as $numbers){
        $res += $numbers;
    }
    echo "Sum of numbers = $res";
}
sum(1, 3, 4); echo "<br/>";


function sayAlloha(){
    echo "Alloha baby";
}
sayAlloha(); echo "<br/>";

function name($name){
    echo "Hello, $name<br>";
}
name("Anvar!");
name("Ali"); echo "<br/>";


function funcsum($a, $b){
    return $a + $b;
}
$sum_of = funcsum(3, 5);
echo $sum_of;      echo "<br/>";


function num_of_1_to_10(){
    for ($i = 1; $i <= 10; $i++){
        echo "$i <br/>";
    }
}
num_of_1_to_10(); echo "<br/>";


function hello($name){
    echo "Hello $name";
}
hello("Mahmud"); echo "<br/>";


function sum_of_two($a, $b){
    return $a + $b;
}
$s = sum_of_two(350, 250);
echo $s; echo "<br/>";


function odd_or_not($number){
    //;
    if($number % 2 == 0){
        echo "This is ODD!";
    }else{
        echo "This is NOT ODD!";
    }
}

//odd_or_not(5);

function sum_of_N($n){
    $count = 0;
    for($i = 1; $i <= $n; $i++){
        $count += $i;
    }
    echo $count;
}

sum_of_N(5); echo "<br/>";



