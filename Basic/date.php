<h1>日期與時間</h1>
<?php

date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s")."<br>";
echo "今天的日期是:". date("m"). "月" . date("d"). "日";

echo "<h2>strtotime</h2>";
echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);

$date2=date("2024-7-15");
$date1=date("2023-10-24");
echo "<br>";
$days=intval((strtotime($date2)-strtotime($date1))/(60*60*24));
echo "<hr>";
echo $date1.'到'.$date2.'有'.$days.'天';


echo "<h2>計算下次生日天數</h2>";

$date="1974-7-15";
?>
<h2>利用date格式參數</h2>
<?php
date_default_timezone_set('Asia/Taipei');
echo date("Y/m/d")."<br>";
echo date("m月d日 l")."<br>";
echo date("Y-m-d H:i:s ")."<br>";
echo date("Y-n-j G:i:s ")."<br>";
echo date("今天是西元Y年m月d日");
if(date("N")<=5){
   echo "上班日";
}else {
    echo "假日";
}

?>
<h2>利用迴圈來計算連續五個周一的日期</h2>

<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>


<?php
$todayWeek=date("N");
$diff=1-$todayWeek;
$lastMonday=strtotime("$diff days");
$nextMonday=date("Y-m-d",strtotime("+1 week",$lastMonday));

for($i=0;$i<5;$i++){
    $nextMonday=date("Y-m-d l",strtotime("+1 week",strtotime($nextMonday)));
    echo $nextMonday;
    echo "<br>";
}
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>