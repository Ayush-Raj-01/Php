<?php
$i =0;
echo "by using 'WHILE' loop\n";
while ($i < 10) {
    $i++;
    echo "The number is " . $i ."\n";
}

$a = 4;
echo "by using 'DO-WHILE' loop\n";
do {
    $a++;
    echo "The number is " . $a ."\n";
} while ($a < 10);


echo "by using 'FOREACH'\n";
$colors = array("Red" , "Green" , "Blue");
$price = array("500" , "200" , "235");
foreach ($colors as $index => $value) {
    echo $value . " - Rs " . $price[$index] . "\n";    
}

