<?php

require_once __DIR__ . "/vendor/autoload.php";

$car = new \App\Cars\Car('Lexus', 'Black', 2002, 1000); 
echo $car->show();  

 
 

echo "<pre>"; 
print_r($car->show());
echo "</pre>";


\App\Other\Other::test(); // Вывод пространство имен
 
echo "<br><br>";

// Второй способ ========================
use App\Other\Other; // Подключаю имя
Other::test(); // Вывод с помощью имя

 
?>