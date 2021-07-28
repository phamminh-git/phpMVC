<?php
require "DAO.php";
require "../Models/Product.php";
require "../Models/Category.php";
    class ProductController extends DAO{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $sql="select * from products";
            $result=$this->connection->query($sql);
            $products=[];
            while($a=$result->fetch_object()){
                $product=new Product($a->id, $a->name, $a->price);
                $products[]=$product;
            }
            return $products;
        }
        public function withCategory(){
            $sql="select products.id, products.name as product_name,products.price,categories.id as category_id ,categories.name as category_name from products, categories where products.category_id=categories.id";
            $result=$this->connection->query($sql);
            $products=[];
            while($a=$result->fetch_object()){
                $category=new Category($a->category_id, $a->category_name);
                $product=new Product($a->id, $a->product_name, $a->price);
                $product->setCategory($category);
                $products[]=$product;
            }
            return $products;
        }
    }

