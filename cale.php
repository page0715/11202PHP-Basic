<h2>線上月曆製作</h2>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box 或flex box 的方式製作月曆</li>
</ul>
<style>
    /* table,tr,td{
        width: 80%;
        height: 80%;
        margin: auto;
    } */
    table {
        border-collapse: collapse;
        border: 3px double #999;
    }

    td {
        border: 1px solid #999;
        padding: 5px 10px;
        text-align: center;
    }
    .bg_red{
        background-color: lightpink ;
        font-size: 24px;
    }
</style>

<?php
echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
$thisMonth=date("Y");
$thisFirstDay=date("Y-m-1");
$thisFirstDate=date("w",strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("Y-m-t");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";

for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        $tmp=7*($i+1)-(6-$j)-$thisFirstDate;
        if($tmp>0 && $tmp<=$thisMonthDays){
            echo  $tmp; 
        }

        echo "</td>";
    }
    echo "</td>";
}
echo "</table>";



?>

