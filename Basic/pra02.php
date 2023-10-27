<style>
    table{
        border-collapse: collapse;
        border:1px solid black;
    }
    td{
        border:1px solid black;
        padding: 3px 9px;
    }
</style>
<h2>九九乘法表</h2>
<?php

echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for ($i=1;$i<=9;$i++){
        echo "<td>";
        echo $j . ' * '.$i.' = '.($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<h2>九九乘法表-有標頭</h2>
<?php

echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo $j*$i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<h2>九九乘法表-留左下區</h2>
<?php

echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else if($j<$i){
            echo "";
        }else {
            echo $j*$i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<!-- 
<table>
    <tr>
        <td>1x1=1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2x1=2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>3x2=6</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table> -->

<?php
/* 

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '$j * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
}
 */
?>