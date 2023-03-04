<?php
    $num1 = 4;
    $num2 = 2;
    
    //Arithematic operators
    echo "num1 + num2: ", $num1 + $num2,"\n";
    echo "num1 - num2: ", $num1 - $num2,"\n";
    echo "num1 * num2: ", $num1 * $num2,"\n";
    echo "num1 / num2: ", $num1 / $num2,"\n";
    echo "num1 % num2: ", $num1 % $num2,"\n";
    echo "num1 ** = (^) num2: ", $num1 ** $num2,"\n\n\n"; // output will be num1^num2;

    //assignment operators
    $num3 = $num2;
    echo $num3,"\n";
    $num3 += $num2;
    echo $num3,"\n";
    $num3 -= $num2;
    echo $num3,"\n";
    $num3 *= $num2;
    echo $num3,"\n";
    $num3 /= $num2;
    echo $num3,"\n";
    $num3 %= $num2;
    echo $num3,"\n\n\n";

    //comparision operators
    $x="34";
    $y=34;  
    echo "x is equal to y: ", $x == $y,"\n";
    echo "x is identical  to y: ", $x === $y,"\n";
    echo "x is not equal to y: ", $x != $y , $x <> $y,"\n";
    echo "x is not identical to y: ", $x !== $y,"\n";
    echo "x is greater to y: ", $x > $y,"\n";
    echo "x is less to y: ", $x < $y,"\n";
    echo "x is greater or equal to y: ", $x >= $y,"\n";
    echo "x is less than or equal to y: ", $x <= $y,"\n";
    echo "spaceship:",4 <=> 2,"\n";
    echo "spaceship:",2 <=> 2,"\n";  
    echo "spaceship:",1 <=> 2,"\n\n\n";

    //increment and decrement operators;
    $no1 = 7;
    $no2 = 5;
    
    echo "post increment: ",$no1++,"\n";
    echo "pre increment: ",++$no1,"\n";
    echo "post decrement: ",$no1--,"\n";
    echo "pre decrement: ",--$no1,"\n";
    // same value remains
    $no3 = $no1++;
    $no1 = $no2++;
    $no2 = $no3++;
    echo "no2= ",$no2,"  no1= ",$no1,"  no3= ",$no3,"\n";

    $no3 = ++$no1;
    $no1 = ++$no2;
    $no2 = ++$no3;
    echo "no2= ",$no2,"  no1= ",$no1,"  no3= ",$no3,"\n";

    $no2 = $no1++ + ++$no3;
    echo "no2= ",$no2,"  no1= ",$no1,"  no3= ",$no3,"\n\n\n";

    //logical operators
    $x = 10;
    $y = 5;
    echo "And operator: ",var_dump($x == 10 and $y == 1),var_dump($x == 10 && $y == 5);
    echo "Or operator: ",var_dump($x == 10 or $y == 1),var_dump($x == 10 || $y == 5);
    echo "Xor operator: ",var_dump($x == 10 xor $y == 1);
    echo "Not operator: ",$x != 10,"\n\n\n";

    //bitwise operators
    $a=10;
    $b=12;
    echo "Bitwise And operator: ", $a & $b ,"\n";
    echo "Bitwise Or operator: ", $a | $b ,"\n";
    echo "Bitwise Xor operator: ", $a ^ $b ,"\n";
    echo "Bitwise Not operator: ", ~$a ,"\n";
    echo decbin($a),"\n";
    echo decbin($a>>2),"\n";
    echo "Bitwise shift left operator: ", $a << 2 ,"\n";
    echo "Bitwise shift right operator: ", $a >> 2 ,"\n\n\n";

    //execution operator
    $output = `date`;
    echo $output,"\n";
    $output = `ls`;
    echo $output,"\n";
    $output = `cd`;
    echo `whoami`,"\n\n\n";
    //echo `clear`,"\n";

    //string operation
    $txt1 = "Hello";
    $txt2 = " World";

    echo "Concatenation: ", $txt1.$txt2 ,"\n";
    $txt1.=$txt2;
    echo "Concatenation: ",$txt1,"\n\n\n";

    //condition operators
    $x=10;
    $y=5;
    $z=null;
    //$z = 5;
    echo $x <> $y ? "Not Equal \n": "Equal \n";
    echo $z = $z ?? "If null or not exist then this will executed\n\n\n";

?>