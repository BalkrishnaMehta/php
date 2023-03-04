<?php
   $coef=1;
    $num = readline("Enter number of rows for triangle: ");
    $column = 0;
    do{
        $space = 1;
        do{
           echo("  ");
           $space++;
        }
        while($space <= $num - $column);
        $row = 0;
        do{
           if ($row == 0 || $column == 0)
              $coef = 1;
           else
              $coef = $coef * ($column - $row + 1) / $row;
           echo "    ",$coef;
           $row++;
        }
        while($row <= $column);
        echo("\n");
        $column++;
     }
     while($column < $num);
    
?>