<?php 
function Getcategory(){

    $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "ninja";
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
      
      $categories = $conn->prepare("SELECT * FROM category ");
      $categories->execute();
      return $categories->fetchAll();
  }
  function Getcategori($id){

    $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "ninja";
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
      
      $categori = $conn->prepare("SELECT * FROM category where id=:id ");
      $categori->bindValue(':id',$id);
      $categori->execute();
      return $categori->fetch();
  }
  function CreateCategory($name,$des){

    $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "ninja";
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $data1=$conn->prepare('INSERT INTO `category` ( name, des) VALUES (?, ?);');
  $data1->execute([$name,$des]);
  
  }
  function updateCategory($name,$des,$id){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ninja";
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $data1=$conn->prepare('UPDATE  category  SET  name=?, des=? WHERE id=?;');
  $data1->execute([$name,$des,$id]);
  }
  function deleteCategory($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ninja";
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $data1 = $conn->prepare("DELETE FROM category where id=?");
    $data1->execute([$id]);
  }