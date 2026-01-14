<?php

for ($i = 1; $i <= 10; $i++){
    echo $i . " ";
}
echo "<br/>";

for ($i = 10; $i >= 1; $i--){
    echo $i . " ";
}
echo "<br/>";

for ($i = 1; $i <= 20; $i ++){
    if($i % 2 == 0){
        echo $i . " ";
    }
}
echo "<br/>";

$sum = 0;
for ($i = 1; $i <= 100; $i++){
    $sum += $i;
}
echo $sum;
echo "<br/>";

for ($i = 5, $j = 1; $j <= 10; $j++){
    echo "$i x $j = " . $i * $j . "<br/>";
}
echo "<br/>";

$count = 0;
for ($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        $count++;
    }
}
echo $count;
echo "<br/>";

for ($i = 1; $i <= 10; $i++){
    echo "$i x $i = " . $i * $i . "<br/>";
}
echo "<br/>";

$val = "*";
for ($i = 1; $i <= 5; $i++){
    echo $val . "<br/>";
    $val .= "*";
}
echo "<br/>";

$rows = 4;
for ($row = 1; $row <= $rows; $row++){
    for ($space = 1; $space <= $rows - $row; $space++){
        echo "&nbsp";
    }
    for ($star = 1; $star <= ($row * 2) - 1; $star++){
        echo "*";
    }
    echo "<br/>";
}

