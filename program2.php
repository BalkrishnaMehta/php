<?php
    $name = readline("Enter your name: ");
    switch($name){
        case "Jeel":
            $WD = 54;
            $MAD = 84;
            $SE = 59;
            $JAVA = 53;
            $DBMS = 69;

            $score = ($WD + $MAD + $SE + $JAVA + $DBMS)/5;
            echo $name ,",Your percantage is: ",$score,"\n";
            break;
        case "Neel":
            $WD = 46;
            $MAD = 54;
            $SE = 49;
            $JAVA = 33;
            $DBMS = 64;

            $score = ($WD + $MAD + $SE + $JAVA + $DBMS)/5;
            echo $name ,",Your percantage is: ",$score,"\n";
            break;
        case "Ayush":
            $WD = 99;
            $MAD = 99;
            $SE = 99;
            $JAVA = 99;
            $DBMS = 99;

            $score = ($WD + $MAD + $SE + $JAVA + $DBMS)/5;
            echo $name ,",Your percantage is: ",$score,"\n";
            break;
    }

    if($score >= 75){
        echo $name, ",You passed with Distinction.","\n";
    }
    elseif($score >= 60 && $score <75){
        echo $name, ",You passed with First Division.","\n";
    }
    elseif($score >= 50 && $score <60){
        echo $name, ",You passed Second Division.","\n";
    }
    elseif($score >= 40 && $score <50){
        echo $name, ",You passed Third Division.","\n";
    }
    else{
        echo $name, ",You Failed.","\n";
    }
?>