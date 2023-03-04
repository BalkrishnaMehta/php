<?php
	$m1;$m2;$m3;$n1;$n2;$n3;$mat1;$mat2;$mat3;
    function add($mat1,$mat2,$m1,$n1){
			echo "Addition is: \n";
	    for($i=0;$i<$m1;$i++){
			echo "| ";
			for($j=0;$j<$n1;$j++){
				echo (String)($mat1[$i][$j]+$mat2[$i][$j])," ";
			}
			echo "|\n";
		}
	}
	function sub($mat1,$mat2,$m1,$n1){
		echo "Subtraction is: \n";
		for($i=0;$i<$m1;$i++){
			echo "| ";
			for($j=0;$j<$n1;$j++){
				echo (String)($mat1[$i][$j]-$mat2[$i][$j])," ";
			}
		echo "|\n";
		}
	}
	function main(){
		global $m1,$m2,$m3,$n1,$n2,$n3,$mat1,$mat2,$mat3;
	    $opr=readline("Enter add or sub or mul or trans: ");
	    if($opr=="add" or $opr=="sub" or $opr=="mul"){
			$mat1=[];
			$m1=(int)readline("Enter number of rows of matrix A: ");
			$n1=(int)readline("Enter number of column of matrix A: ");
			for($i=0;$i<$m1;$i++){
				$list1=[];
				for($j=0;$j<$n1;$j++){
					$value=readline("Enter value for position ".$i.$j.": ");
					$list1[]=(int)$value;
				}
				$mat1[]=array_merge($mat1,$list1);
			}
			echo "Matrix A: \n";
			for($k=0;$k<$m1;$k++){
				echo "| ";
				for($l=0;$l<count($mat1[$k]);$l++){
					echo (String)$l," ";
				}
				echo "|\n";
			}

			$mat2=[];
			$m2=(int)readline("Enter number of rows of matrix B: ");
			$n2=(int)readline("Enter number of column of matrix B: ");
			for($i=0;$i<$m2;$i++){
				$list2=[];
				for($j=0;$j<$n2;$j++){
					$value=readline("Enter value for position ".$i.$j.": ");
					$list2[]=(int)$value;
				}
				$mat2[]=array_merge($mat2,$list2);
			}
			echo "Matrix B: \n";
			for($k=0;$k<$m2;$k++){
				echo "| ";
				for($l=0;$l<count($mat2[$k]);$l++){
					echo (String)$l," ";
				}
				echo "|\n";
			}
		}
	    else{
			$mat3=[];
			$m3=(int)readline("Enter number of rows of matrix A: ");
			$n3=(int)readline("Enter number of column of matrix A: ");
			for($i=0;$i<$m3;$i++){
				$list3=[];
				for($j=0;$j<$n3;$j++){
					$value=(int)readline("Enter value for position ".$i.$j.": ");
					$list3[]=$value;
				}
				$mat3[]=array_merge($mat3,$list3);
			}
			echo "Matrix A: \n";
			for($k=0;$k<$m3;$k++){
				echo "| ";
				for($l=0;$l<count($mat3[$k]);$l++){
					echo (String)$l," ";
				}
				echo "|\n";
			}
			if($opr=="add"){
				if($m1==$m2 and $n1==$n2){
					add($mat1,$mat2,$m1,$n1);
				}
				else{
					main();
				}
			}
			if($opr=="sub"){
				if($m1==$m2 and $n1==$n2){
					add($mat1,$mat2,$m1,$n1);
				}
				else{
					main();
				}
			}
		}
	}
	main()

?>
