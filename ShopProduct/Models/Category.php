<?php
    class Category{
        private $id;
        private $name;
        private $products;
        public function setId($id){
            $this->id=$id;
        }
        public function setName($name){
            $this->name=$name;
        }
        public function setProducts($products){
            $this->products=$products;
        }
        public function getProducts(){
            return $this->products;
        }
    }

?>