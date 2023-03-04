<?php
    $first_term = 0;
    $second_term = 1;
    $next_term = $first_term + $second_term;
    $i=0;
    do{
        if($i == 0){
            echo "Fibonacci Series: ",$first_term;
            echo " ",$second_term;
        }
        echo " " ,$next_term;
        $first_term = $second_term;
        $second_term = $next_term;
        $next_term = $first_term + $second_term;
        $i++;
    }
    while($i<18);
    echo "\n";
?>