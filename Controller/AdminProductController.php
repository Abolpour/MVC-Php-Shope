<?php
function create(){
    if ($_POST) {
        include_once __DIR__."/../model/product.php";
        echo $name=$_POST['name'];
        echo $des=$_POST['des'];
        echo $price=$_POST['price'];
        echo $img=$_POST['img'];
        echo $category=$_POST['category'];
        echo $shop=$_POST['shop'];
        
        if ($name=='' && $name==null ){
            echo "name is empty" ;
        }
         if ($des=='' && $des==null) {
            echo "description is empty";
         }
         if ($price=='' && $price==null) {
            echo "price is empty";
         }
         if ($img=='' && $img==null) {
            echo "image is empty";
         }

    CreateProduct($name,$des,$price,$img,$category,$shop);
    header("location:http://localhost:8080/mvc/?name=Adminlist&info=products");
    
    }
    include_once __DIR__."/../view/Admin/form/products-form.php";
}
function update($id=null){

    include_once __DIR__."/../model/product.php";
    include_once __DIR__."/../model/category.php";
    include_once __DIR__."/../model/shops.php";
if($_POST){
    $name=$_POST['name'];
    $des=$_POST['des'];
    $price=$_POST['price'];
    $img=$_POST['img'];
    $category=$_POST['category'];
    $shop=$_POST['shop'];
    $id=$_POST['id'];
    updateProduct($name,$des,$price,$img,$category,$shop,$id);
    header("location:http://localhost:8080/mvc/?name=Adminlist&info=products");
}
    $product= getProduct($id);
    $shops= Getshops();
    $categories= Getcategory();
    
    include_once __DIR__."/../view/Admin/form/products-form-edit.php";
}
function delete ($id){
    include_once __DIR__."/../model/product.php";
deleteProduct($id);

    header("location:http://localhost:8080/mvc/?name=Adminlist&info=products");
}