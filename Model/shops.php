<?php



function GetShops(){
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "ninja";

  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  
  $shops = $conn->prepare("SELECT * FROM shops");
  $shops->execute();
return $shops->fetchall();
}
function Getshop($id){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "ninja";
  
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    
    $shop = $conn->prepare("SELECT * FROM shops where id = :id ");
    $shop->bindValue(':id',$id);
    $shop->execute();
    return $shop->fetch();




}
function Createshops($name,$adress){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "ninja";
  
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  $data1=$conn->prepare('INSERT INTO `shops` ( name,adress) VALUES (?,?);');
  $data1->execute([$name,$adress]);
}
function updateUpdate($name,$adress,$id){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "ninja";
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  $data1=$conn->prepare('UPDATE  shops  SET  name=?, adress=?  WHERE id=?;');
  $data1->execute([$name,$adress,$id]);

}
function deleteShop($id){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "ninja";
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  $data1 = $conn->prepare("DELETE FROM shops where id=?");
  $data1->execute([$id]);
}