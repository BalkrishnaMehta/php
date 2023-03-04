<?php
   $teacher = array("Ashish"=>25, "Dev"=>37, "Dhruv"=>28);
   $student = array("Ashish"=>20, "Ayush"=>18, "Neel"=>28, "Aryan"=>11);
   
   $teacher_unique = array_diff($teacher,$student);
   $student_unique = array_diff($student,$teacher);
   
   $unique_arrayTogether = $teacher_unique + $student_unique;
   //$unique_arrayTogether = array_combine($teacher_unique,$student_unique);   //use this if both have same numbers of elements
   //print_r ($unique_arrayTogether); // It will print all unique values but if two values have same keys than it will skip second one since in one array one key can't be repeated.
   echo "Unique values are: ";
   foreach($unique_arrayTogether as $key => $value){
    	echo $value," ";
    }
    echo "\n";
?>
