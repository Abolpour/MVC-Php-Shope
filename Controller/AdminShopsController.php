<?php
function create(){
   
   if ($_POST) {
    include_once __DIR__."/../model/shops.php";
    echo $name=$_POST['name'];
echo $adress=$_POST['adress'];
if ($name=='' && $name==null ){
    echo "shop Name is empty" ;
}
 if ($adress=='' && $adress==null) {
    echo "shop Adress is empty";
 }
 Createshops($name,$adress);

 header("location:http://localhost:8080/mvc/?name=Adminlist&info=shops");

   }
    include_once __DIR__."/../view/Admin/form/shops-form.php";

}
function update($id=null){
    include_once __DIR__."/../model/shops.php";
    if($_POST){
        $name=$_POST['name'];
        $adress=$_POST['des'];
       $id=$_POST['id'];
       updateUpdate($name,$adress,$id);
       header("location:http://localhost:8080/mvc/?name=Adminlist&info=shops");
    }

    $shop=Getshop($id);
    
    include_once __DIR__."/../view/Admin/form/shops-form-edit.php";
}
function delete ($id){
    include_once __DIR__."/../model/shops.php";


deleteShop($id);

    header("location:http://localhost:8080/mvc/?name=Adminlist&info=shops");
            
}