<?php


class Product extends Store {
    

    public $name;
    public $price;
    public $logo;
    public $tipology;
    public $category;
    public $calories;
    public $size;
    public $width;
    public $height;
    public $material;
    public $sound;

    public function selectType($arr){
        if($this->tipology == 'cibo'){
            $this->calories = $arr['calorie'];
            $this->size = $arr['taglia'];
        }
        elseif($this->tipology == 'cuccia'){
            $this->width = $arr['larghezza'];
            $this->height = $arr['altezza'];
        }
        elseif($this->tipology == 'giochi'){
            $this->material = $arr['materiale'];
            $this->sound = $arr['rumoroso'];
        }
    }



public function __construct($_nameStore, $_productList){

    $this->name = $_productList['nome'];
    $this->price = $_productList['prezzo'];
    $this->tipology = $_productList['tipologia'];
    $this->category = $_productList['categoria'];
    $this->logo = $_productList['logo'];
    $this->nameStore = $_nameStore;
} 

}

?>