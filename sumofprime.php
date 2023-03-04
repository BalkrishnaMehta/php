<?php
    $i=2;
    $sum=0;
    do{
        $j=2;
        $tmp=1;
        do{
            if($i%$j==0) {
				$tmp=0;
				break;
			}
            $j++;
        }
        while($j<$i);
        if($tmp==1 || $i==2) {
			$sum+=$i;
		}
        $i++;
    }
    while($i<100);
    echo "Sum of prime numbers from 1 to 100: ",$sum,"\n";
?>