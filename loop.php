<?php


// 初始化加總結果
$sum=0;

// for(起始值;條件式;增減值){
//     程式碼 
// }

for($i=1; $i<=10 ; $i++){
    echo $sum.'+'.$i.'=';
    $sum += $i;
    echo $sum.'<br>';

}
// 輸出 1 加到 10 的總和
echo '1加到10 總和是'.$sum ;

?>
<hr>
<h1>迴圈練習</h1>
<h3>使用迴圈練習的結果</h3>
<ul>
    <li>1,3,5,7,9...n</li>
    <li>10,20,30,40,50,60....n</li>
    <li>3,57,7,11,13,17....97</li>
</ul>

<?php
$n=30;

for($i=1;$i<=$n;$i=$i+2){
echo $i;
echo ',';
}

echo  '<hr>';

for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ',';
}
?>
<hr>
<h3>巢狀迴圈</h3>
<?php
$n=100;
$count=0;
for($j=3;$j<=$n;$j++){
    $flag=true;
    
    for($i=2;$i<=($j/2);$i++){
        $count++;
        //echo "$j 除以 $i 餘數 ". ($j % $i);
        if(($j % $i) == 0){
            $flag=false;
          //  echo "<br>";
            break;
        }
        //echo "<br>";
    }
    
    if($flag==true){
        echo $j ;
        echo ",";
    }else{
        //echo $j . "不是質數";
    }
}
echo "<br>";
echo "一共執行了".$count."次的程式內容";
?>


