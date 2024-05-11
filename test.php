<?php 
    $name = "Danilo ";
    $num = 11;
    $nista = null;
    $boolian = true;
    $array = ['Ana ', 'Marija '];
    $object = [
        "name " => "Danilo ",
        "age " => 44
    ];
    
    // echo($array[0]);
    // echo $object['age'];

    foreach($object as $prop){
        echo $prop;
    }
    foreach($object as $key => $value){
        echo $key;
        echo $value;
    }

    $car = "skoda ";

    function info($car){
        // $car = "volvo ";
        echo $car;
    } 
    info($car);
?>