<?php 
function Getusers(){

    $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "ninja";
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
      
      $user = $conn->prepare('SELECT * FROM users ');
      $user->execute();
      return $user->fetchAll();
  }
  function Getuser($id){

    $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "ninja";
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
      
      $users = $conn->prepare('SELECT * FROM users WHERE id=:id ');
      $users->bindValue(':id',$id);
      $users->execute();
      return $users->fetch();
  }
  function CreateUser($usernam,$pasword){
    $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "ninja";
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $data1=$conn->prepare('INSERT INTO users ( usernam, pasword) VALUES (?, ?);');
    $data1->execute([$usernam,$pasword]);
  }
  function updateUser($usernam,$pasword,$id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ninja";
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $data1=$conn->prepare('UPDATE  users  SET  usernam=?, pasword=?  WHERE id=?;');
  $data1->execute([$usernam,$pasword,$id]);
  }
  function deleteUser($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ninja";
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $data1 = $conn->prepare("DELETE FROM users where id=?");
    $data1->execute([$id]);
  }