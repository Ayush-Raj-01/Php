<?php
    // definr constant using define function
    define("WISHES", "Good Evening");
    echo WISHES;
    echo "\n";

    //define constant using const keyword
    const WISHES1 = "Good day";
    echo WISHES1;
    echo "\n";

    // print constants using constant() function
    echo constant("WISHES");
    echo "\n";
    echo constant("WISHES1");
?>