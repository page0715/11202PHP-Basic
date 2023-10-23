<?php

$students = ['姓名', '國文', '英文', '數學', '地理', '歷史'];

$students[0] = [
    '姓名' => 'judy',
    '國文' => 95,
    '英文' => 64,
    '數學' => 70,
    '地理' => 90,
    '歷史' => 84
];
$students[1] = [
    '姓名' => 'amo',
    '國文' => 88,
    '英文' => 78,
    '數學' => 54,
    '地理' => 81,
    '歷史' => 71
];

$students[2] = [
    '姓名' => 'john',
    '國文' => 45,
    '英文' => 60,
    '數學' => 68,
    '地理' => 70,
    '歷史' => 62
];

$students[3] = [
    '姓名' => 'peter',
    '國文' => 59,
    '英文' => 32,
    '數學' => 77,
    '地理' => 54,
    '歷史' => 42
];

$students[4] = [
    '姓名' => 'hebe',
    '國文' => 71,
    '英文' => 62,
    '數學' => 80,
    '地理' => 62,
    '歷史' => 64
];

echo print_r($students[4]);

?>

<h2>利用程式來產生陣列</h2>
<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
        padding: 3px 9px;
    }
</style>
<?php
$nine = [];

for ($j = 1; $j <= 9; $j++) {
    for ($i = 1; $i <= 9; $i++) {
        $nine[] = "$j * $i  = " . ($j * $i);
    }
}
// print_r($nine);

foreach ($nine as $idx => $value) {
    echo $value;
    if ($idx % 9 == 8) {
        echo "<br>";
    }
}

echo "<br><br>";

echo "<table>";
foreach ($nine as $idx => $value) {
    if ($idx % 9 == 0) {
        echo "<tr>";
        echo "<td> $value </td>";
    } else if ($idx % 9 == 8) {
        echo "<td> $value </td>";
        echo "</tr>";
    } else {
        echo "<td> $value </td>";
    }
}

echo "</table>";


// if ( (array_keys($nine)  % 9 == 0)){
//     print_r($nine);
//     echo "<br>";
// }
// else{
//     print_r($nine);
// }



?>