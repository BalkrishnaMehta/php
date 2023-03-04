<?php
    $str1="AMTICS in UTU";   //in place of variable we can directly use string.
    echo strlen($str1) . "\n";
    echo str_word_count($str1) . "\n";
    echo strpos($str1,"in") . "\n";
    echo strrev($str1) . "\n";
    echo str_replace("UTU","maliba",$str1) . "\n";

    $num = 573;
    echo is_int($num) . "\n";
    echo var_dump(is_int($num));
    $num=545.76;
    echo is_int($num) . "\n";
    echo var_dump(is_int($num));

    echo "largest number in php : ",PHP_INT_MAX , "\n";
    echo "largest number in php : ",PHP_INT_MIN , "\n";
    echo "largest number in php : ",PHP_INT_SIZE , "\n";

    $num2 = 757.7575;
    echo var_dump(is_int($num));

    echo "Largest floating point number: " , PHP_FLOAT_MAX , "\n";
    echo "Smallest positive floating point number: " , PHP_FLOAT_MIN , "\n";
    echo "Largest negative floating point number: " , -PHP_FLOAT_MIN , "\n";
    echo "Value: \t" , PHP_FLOAT_DIG , "\n";
    echo "Value: 2\t" , PHP_FLOAT_EPSILON , "\n";

    $num3 = 1.9e411;  //1.9 X 10^411
    echo var_dump($num3);
    var_dump(is_infinite($num3));
    var_dump(is_infinite($num2));

    $num4="64646"; 
    var_dump(is_numeric($num4));  // use to find number or numeric string;
    var_dump(is_int($num4));

    $num5= "2343" +100;
    var_dump(is_numeric($num5));

    $num5= "hello";
    var_dump(is_numeric($num5));

    $num6= "2343.6868";
    $cast1  = (float)$num6;
    var_dump($cast1);

    $cast2  = (int)$num6;
    echo $cast2 , "\n";
?>