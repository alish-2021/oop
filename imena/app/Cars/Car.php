<?php 

namespace App\Cars; // Пространство имен 
//use App\Other\Details ; // Подключение пространтсво имен с другим именем, в конце добавляю класс 

class Car extends Details { //Наследовние 
   protected $model;
   private $color;
   private $year;
   private $horse; 

   

   public function __construct($model, $color, $year, $horse){ 
      $this->model = $model;
      $this->color = $color; 
      $this->year = $year;
      $this->horse = $horse;
   }


   public function show(){
      return [
         "model" => $this->model,
         "color" => $this->color,
         "year" => $this->year,
         "horse" => $this->horse,
         "price" => $this->get_price(), 
         "tax" => $this->get_tax(),
      ];
   }

   public function show_echo(){ 
      $pric = $this->get_price(); 
      $ta = $this->get_tax(); 
      echo "
         <p>Model: $this->model</p>
         <p>Color: $this->color</p>
         <p>Year: $this->year</p>
         <p>Price: $pric</p> 
         <p>Tax: $ta</p> 
         ";
   }

   private function get_price(){
      $price = 0; 
      if($this->model = "Lexus"){ 
         $price += 100;
      } elseif($this->model = "Toyoto"){
         $price += 50;
      }

      if($this->year = 2002){
         $price += 100;
      } elseif($this->year < 2002){
         $price += 50;
      }

      return $price;
   }

}


 
?>