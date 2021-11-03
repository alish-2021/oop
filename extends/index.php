<?php

require "Car.php";
$car = new Car('Lexus', 'Black', 2002, 1000); 
echo $car->show();  

 

echo "<pre>";
var_dump($car->get_tax());
print_r($car->show());
echo "</pre>";

 

 
?>