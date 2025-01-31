<?php
// declare a string variable 
$num = 132.452345;

//print the original value and its type
echo "Original value: $num, Type: " . gettype($num) . "\n";

// convert to an string

$intvalue = (int)$num;
echo "converted to integer: $intvalue, Type: " . gettype($intvalue) . "\n";

// convert to float

$floatvalue = (float)$num;
echo "converted to float: $floatvalue, Type: " . gettype($floatvalue) . "\n";

// convert to boolean

$boolvalue = (bool)$num;
echo "converted to boolean: " . ($boolvalue ? "true" : "false");

?>