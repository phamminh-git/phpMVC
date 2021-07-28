<?php
require "DAO.php";
require "../Models/Product.php";
require "../Models/Category.php";
class CategoryController extends DAO{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $sql="select * from categories";
        $result=$this->connection->query($sql);
        $categories=[];
            while($a=$result->fetch_object()){
                $categories[]=$a;
            }
            return $categories;
    }
    public function withProducts($id){
        $sql="select categories.id, categories.name as category_name, products.id as product_id, products.name as product_name, products.price from categories, products where categories.id=$id and categories.id=products.category_id";
        $result=$this->connection->query($sql);
        $products=[];
        $category=new Category();
        while($a=$result->fetch_object()){
            $product=new Product($a->product_id, $a->product_name, $a->price);
            $products[]=$product;
            $category->setId($a->id);
            $category->setName($a->category_name);
        }
        $category->setProducts($products);
        print_r($category->getProducts());
    }
}


$a=new CategoryController();
$a->withProducts($_GET['categoryId']);