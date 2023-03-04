<?php
    echo pi(),"\n";
    echo abs(-5646.56),"\n";
    echo min(33,5,32,-56),"\n";
    echo max(33,5,32,-56),"\n";
    $ary=[2,3,54,1,-45];
    echo min($ary),"\n";
    echo round(0.8),"\n";
    echo round(0.2),"\n";
    echo round(34.45),"\n";
    echo sqrt(9),"\n";
    echo rand(),"\n";
    echo rand(0,10),"\n"; //0 and 10 also included.
    //define(name, value, case-insensitive);
    define("class1", [
        "cs1",
        "cs2",
        "cs3"
      ]);
      echo class1[0],"\n";
    $num = 0125; // prefixed with 0 will convert to octal and ox will convert to hexadecimal
    echo $num,"\n";

    define("VAR1","print me",true);
    echo var1,"\n";
    echo VAR1,"\n";

    define("VAR2","print me",false);
    echo var2,"\n";
    echo VAR2,"\n";

    function myfun(){
        echo VAR2 ," I am inside in function";
    }

    myfun();
?>