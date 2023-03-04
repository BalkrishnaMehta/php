<?php
   $pudding['raspberry'] = 333;
    $pudding['peach'] = 222;
    $icecream['chocolate'] = 999;
    $icecream['peach1'] = 222;
    print_r($pudding);
    print_r($icecream);
    //$difference = array_diff($icecream,$pudding);
    $difference = array_diff($pudding,$icecream);
    print_r($difference);
    foreach($difference as $key => $value){
    	echo $key,":",$value,"\n";
    }

?>
