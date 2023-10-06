<?php
// $a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "<pre>";

echo $a[0]."<br>";
echo $a[3];

$b=[];
$b['姓名']='翁沛騏';
$b['最高學']='龍華科技大學';
$b['tel']='0912345678';
$b['血型']='O';

echo "<pre>";
print_r($b);
echo "<pre>";

echo $b['姓名'];
echo $b['tel'];

?>