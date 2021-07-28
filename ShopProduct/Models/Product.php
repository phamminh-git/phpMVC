<?php
class Product{
    private $id;
    private $name;
    private $price;
    private $category;
    public function __construct($id, $name, $price)
    {
        $this->id=$id; $this->name=$name; $this->price=$price;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setCategory($category){
        $this->category=$category;
    }
}