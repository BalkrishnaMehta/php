<?php
    $cars = array("Volvo","BMW","Toyato","Merc");
    print_r($cars);
    $text = implode(",",$cars); // Implode an array to string.
    echo $text,"\n";

    $automobile = explode(",",$text); //explode a string into a array
    print_r($automobile);

    $automobile[] = "Hyundai";     //append value in array
    list($a,$b,$c,$d,$e) = $automobile;
    echo $a,"\n";
    echo $b,"\n";
    echo $c,"\n";
    echo $d,"\n";
    echo $e,"\n";

    $age = array("Peter" => "35" , "Ayush" => "25" , "Joe" => "18");
    //echo $Ayush,"\n"; it will give error undefined variable.
    extract($age);
    echo $Ayush,"\n";

    //array comparision

    $pudding['raspberry'] = 333;
    $pudding['peach'] = 222;
    $icecream['butterscotch'] = 111;
    $icecream['chocolate'] = 999;
    print_r($pudding);
    print_r($icecream);
    $dessert = $pudding + $icecream;
    print_r($dessert);
    // == same elements  === same elements in a same order
    if($pudding !== $icecream){
        echo "same\n";
    }
    else{
        echo "difference\n";
    }

?>