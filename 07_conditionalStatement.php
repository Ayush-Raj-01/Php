<?php
        // USE OF IF STATEMENT
    $d = date("H");
    if($d == "Thu"){ //trim($d)===" " -> maam used
        echo "It's Thrusday.!";
    }

    echo "\n";

        // USE OF IF-ELSE STATEMENT
        // TO CHECK OF A NUMBER IS EVEN OR ODD!
            
    $num = 7;
    if ($num % 2 == 0) {
        echo "$num is even number";
    }
    else{
        echo "$num is odd number";
    }

    echo "\n";
    // USE OF IF-ELSE STATEMENT

    $marks = 65;
    if($marks<33){
        echo "fail";
    }
    elseif ($marks>=34 && $marks<50) {
        echo"d grade";
    }
    elseif ($marks>=50 && $marks<65) {
        echo"c grade";
    }
    elseif ($marks>=65 && $marks<80) {
        echo"b grade";
    }
    elseif ($marks>=80 && $marks<90) {
        echo"a grade";
    }
    elseif ($marks>90) {
        echo"a+ grade";
    }
    else{
        echo "invalid input";
    }
    
    echo "\n";
        // USE OF SWITCH CASE

    $num1 = 20;
    switch($num1){
        case 10:
        echo ("number is equal to 10");
        break;
        case 20:
        echo ("number is equal to 20");
        break;
        case 30:
        echo ("number is equal to 30");
        break;
        default:
        echo "number is not equal to 10 , 20 or 30";
    }

    ?>
