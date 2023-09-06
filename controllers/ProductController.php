<?php

namespace controllers;
use model\Product;

require_once("models/Product.php");

class ProductController
{
    public function action(){
        $action = isset($_GET["action"])?$_GET["action"]:"/";
        switch ($action){
            case"/":$this->listProducts();break;
            case"create":$this->create();break;
            case"save":$this->save();break;
            case"edit":$this->edit();
            case"update":$this->update();
            case"delete":$this->delete();
            default: die("404 not found");
        }
    }
public function listProducts(){
        $productObj = new Product();
        $products = $productObj->all();
    include_once("views/product/list.php");
}
public function create(){
include_once("views/product/create.php");
    }
public function save(){
    $productObj = new Product();
    $products = $productObj->store($_POST);
    header("Location: index.php?page=product");
    }
public function edit(){

}
public function update(){

}
public function delete(){

}
}