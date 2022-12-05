<?php

include ("product.php");

class Pizza extends Product{
    private $vegetarian;

    public function __construct ($id, $name, $picture, $price, $quantity, $size, $vegetarian){
        parent::__construct ($id, $name, $picture, $price, $quantity, $size);
        $this->vegetarian=$vegetarian;

    }

    public static function calculatePrice($Plist){
        $total = 0;
        foreach($Plist as $list){
            $total = $total + $list;
               
        }
        return $total;
    }

    public function  calculateSQ(){
        $q = 0;
        $s = 0;
        if($this->quantity == "One"){
            $q = 1;
        }
        if($this->quantity == "Two"){
            $q = 2;
        }
        if($this->quantity == "Three"){
            $q = 3;
        }


        if($this->size == "Small"){
            $s = $this->price;
        }
        if($this->size == "Medium"){
            $s = $this->price + 1.00;
        }
        if($this->size == "Large"){
            $s = $this->price + 2.00;
        }

        return $q*$s;
    }

   


    /**
     * Get the value of vegetarian
     */ 
    public function getVegetarian()
    {
        return $this->vegetarian;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setVegetarian($vegetarian)
    {
        $this->vegetarian = $vegetarian;

        return $this;
    }

}

?>