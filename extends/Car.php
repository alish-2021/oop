<?php
namespace car;
use Car_details\ as CarDetails;

class Car extends CarDetails { //Наследовние 
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