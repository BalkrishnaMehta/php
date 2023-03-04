<?php    
    $x=readline("Enter Num: ");
    $y=readline("Enter Num: ");
    $z=readline("Enter Num: ");

    echo (($x > $y) && ($x > $z)) ? "$x is max\n" : ((($y > $x) && ($y > $z)) ? "$y is max\n" : "$z is max\n") ;

    echo (($x < $y) && ($x < $z)) ? "$x is min\n" : ((($y < $x) && ($y < $z)) ? "$y is min\n" : "$z is min\n") ;
?>