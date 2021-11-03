<?php

class Car {
   private $model;
   private $color;
   private $year;
   private $horse; 


   public function __construct($model, $color, $year, $horse){ // здесь я передаю в скобку переменные которые нужно присвоит к перемонной 
      $this->model = $model;
      $this->color = $color; // Присваеваю
      $this->year = $year;
      $this->horse = $horse;
   }


   public function show(){
      $price = self::get_price($this->model, $this->year); // приваеваю к функции get_price к переменной, в статики принято обращаться SELF:: (это как $this->)
      echo "
            Model: $this->model;<br> // здесь я вывожу переменные с конструтора
            Color: $this->color;<br>
            Year: $this->year;<br>
            Horse: $this->horse;<br>
            Price: $price; // здесь вывожу цену как пременную
      ";
   }

   public static function get_price($model, $year){ // Функция для получение цены с помощью статики, для статики нужно как и в котсрутор предать изночальные переменные или данные
      $price = 0; // создаю переменную

      if($model = "Lexus"){ // В статики не получится обращаться $this->, надо как обычная переменная
         $price += 100;
      } elseif($model = "Toyoto"){
         $price += 50;
      }

      if($year = 2002){
         $price += 100;
      } elseif($year < 2002){
         $price += 50;
      }

      return $price;
   }

}


class Bject {
   public static $mes;


   public static function show_mes(){
      return self::$mes; // Для статичной переменной
   }
}


?>