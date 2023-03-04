<?php
    $multi_array = array(
        "user1" => array(
            "user" => readline("Enter Your Username: "),
            "pass" => readline("Enter Your Password: "),
        ),
        "user2" => array(
            "user" => readline("Enter Your Username: "),
            "pass" => readline("Enter Your Password: "),
        ),
        "user3" => array(
            "user" => readline("Enter Your Username: "),
            "pass" => readline("Enter Your Password: "),
        )
    );
    $keys = array_keys($multi_array);
    for($i = 0; $i < count($multi_array); $i++) {
        echo $keys[$i] . "{\n";
        foreach($multi_array[$keys[$i]] as $key => $value) {
            echo $key . " : " . $value . "\n";
        }
        echo "}\n";
    }
?>