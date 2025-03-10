<?php
   
    for($i = 0; $i <= 10; $i++) {
        $product = 10 * $i;
        echo "The product of 10 * $i: $product<br>";
    }
?>

<?php
   
    $animal_list = array("lion", "dog");

    foreach($animal_list as $array_list) {
        echo $array_list . "<br>";
    }
?>

<?php
   
    $i = 1;
    echo "The numbers from 1 to 10:<br>";

    while($i <= 10) {
        echo $i . "<br>"; 
        $i++; 
    }
?>
