<?php

    $number = 10;
    $number = "Hello World";

    // echo $number;
    
    // if($number < 6){
    //     echo "The number is less than 6 <br>";
    // } else{
    //     echo "The number is greater than 6 <br>";
    // }

    for($i=0; $i<5; $i++){
        echo (string)$i . " halooooo<br>";
    }

    $normal_array = [1, 2, 3, 4, 5];
    $assoc_array = ["nama" => "bangchan", "umur" => 27];

    foreach($assoc_array as $x => $y){
        echo $x . " " . $y . "<br>";
    }
?>