<?php

$array = [3, 2, 7, 10, 30, 17];

if (in_array(2, $array)) {
    echo "數字有在陣列中";
} else {
    echo "數字不在陣列中";
}

$tmp=array_keys($array);
echo "<pre>";
print_r($tmp);
echo "</pre>";








echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);



echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);
