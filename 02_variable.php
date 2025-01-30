<?php
$a = 43;
$b = "Hai";
$c = 8.9;
$d = true;
$e = NULL;
$f = [1,2,3];

var_dump($a);
echo "\n";
var_dump($b);
echo "\n";
var_dump($c);
echo "\n";
var_dump($d);
echo "\n";
var_dump($e);
echo "\n";
var_dump($f);
echo "\n";

// gettype() -> is useed to get the datatype of the variable

echo "Type of a: " . gettype($a) . "\n" ;
echo "Type of b: " . gettype($b) . "\n" ;
echo "Type of c: " . gettype($c) . "\n" ;
echo "Type of d: " . gettype($d) . "\n" ;
echo "Type of e: " . gettype($e) . "\n" ;
echo "Type of f: " . gettype($f) . "\n" ;

?>