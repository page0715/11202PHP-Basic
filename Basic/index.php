<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hi</h1> -->
    <?php
    define('age',30);
    $age=40;
    $age=50;
    echo $age;
    echo age;
    $name='翁沛騏';
    echo $name;
    $score=70;
    $level=($score>=60)?'及格':'不及格';
    echo $level;

    $a=15;
    $b=43;
    $c;

    $c=$a;
    $a=$b;
    $b=$c;

    echo $a;
    echo $b;



    ?>
</body>
</html>