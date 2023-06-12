<?php 

function GetProductsByShopid($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ninja";
    
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
      
      $products = $conn->prepare("SELECT * FROM product where shop = :id ");
     
      $products->bindValue(':id',$id);
      $products->execute();
      return $products->fetchAll();
}
function GetProducts(){

  $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ninja";
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    
    $categories = $conn->prepare("SELECT * FROM Product ");
    $categories->execute();
    return $categories->fetchAll();
}
function GetProduct($id){

  $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ninja";
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    
    $Product = $conn->prepare("SELECT * FROM Product where id=:id");
    $Product->bindValue(':id',$id);
    $Product->execute();
    return $Product->fetch();
}
function CreateProduct($name,$des,$price,$img,$category,$shop){
  
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "ninja";
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  $data1=$conn->prepare('INSERT INTO `product` ( name, des, price , img,category,shop) VALUES (?,?,?,?,?,? );');
  $data1->execute([$name,$des,$price,$img,$category,$shop]);
}
function updateProduct($name,$des,$price,$img,$category,$shop,$id){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "ninja";
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  $data1=$conn->prepare('UPDATE  product  SET  name=?, des=?,price=?,img=? ,category=?,shop=?  WHERE id=?;');
  $data1->execute([$name,$des,$price,$img,$category,$shop,$id]);
}
function deleteProduct($id){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "ninja";
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  $data1 = $conn->prepare("DELETE FROM product where id=?");
  $data1->execute([$id]);
}