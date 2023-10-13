<?php

echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "****<br>";
echo "*****<br>";

echo "<hr>";

for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
echo "<h2>倒直角三角形</h2>";
for($i=0;$i<=5;$i++){
    for($j=5;$j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

?>


<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h2>正三角形</h2>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>
<h2>倒正三角形</h2>
<?php
for($i=4;$i>=0;$i--){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>
<h2>菱形</h2>
<?php
for($i=0;$i<9;$i++){

    if($i<=4){
        $tmp=$i;
    }else{
        $tmp--;
    }

    for($j=0;$j<(4-$tmp);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($tmp*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>
<h2>矩形</h2>
<?php

for($i=0;$i<7;$i++){

    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }else if($j==0 || $j==6){
            echo "*";
        }else{
            echo "&nbsp;";

        }

    }
    echo "<br>";

}

?>
<h2>矩形加對角線</h2>
<?php

for($i=0;$i<7;$i++){

    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }else if($j==0 || $j==6 || $i==$j || $i+$j==6){
            echo "*";
        }else{
            echo "&nbsp;";

        }

    }
    echo "<br>";

}
?>

<h2>矩形加對角線(紅色)</h2>
<?php

for($i=0;$i<7;$i++){

    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }else if($j==0 || $j==6 || $i==$j || $i+$j==6){
            if($i==$j || $i+$j==6){
                echo "<span style='color:red'>*</span>";
            }else{
                echo "*";
            }
        }else{
            echo "&nbsp;";

        }

    }
    echo "<br>";

}
?>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>