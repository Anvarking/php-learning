<?php
$i = 1;

while($i <= 5){
    echo $i . "<br>";
    $i++;
}echo "<br/>";


$num1 = 1;
while($num1 <= 10){
    echo $num1 . "<br>";
    $num1++;
}echo "<br/>";


$num2 = 10;
while($num2 >= 1){
    echo $num2 . "<br>";
    $num2--;
}echo "<br/>";


$num3 = 1;
while($num3 <= 20){
    if($num3 % 2 == 0){
        echo $num3 . " ";
    }
    $num3++;
}echo "<br/>";


$four = 1;
$count = 0;
while($four <= 100){
    $count += $four;
    $four++;
}echo $count;
echo "<br/>";


$five = 1;
$count2 = 0;
while($five <= 100){
    if($five % 5 == 0){
        $count2 ++;
    }
    $five++;
}echo $count2;
echo "<br/>";


$fac = 1;
$six = 1;
while($six <= 5){
    $fac *= $six;
    $six++;
}echo $fac;
echo "<br/>";


