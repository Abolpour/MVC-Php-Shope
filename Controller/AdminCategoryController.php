<?php
function create(){
    if ($_POST) {
        include_once __DIR__."/../model/category.php";
        echo $name=$_POST['name'];
        echo $des=$_POST['des'];
        if ($name=='' && $name==null ){
            echo "name is empty" ;
        }
         if ($des=='' && $des==null) {
            echo "description is empty";
         }
         
        CreateCategory($name,$des);
        header("location:http://localhost:8080/mvc/?name=Adminlist&info=category");
    }
    include_once __DIR__."/../view/Admin/form/category-form.php";
}
function update($id=null){
    include_once __DIR__."/../model/category.php";
    if($_POST){
        $name=$_POST['name'];
        $des=$_POST['des'];
        $id=$_POST['id'];
        updateCategory($name,$des,$id);
        header("location:http://localhost:8080/mvc/?name=Adminlist&info=category");
    }
    $category= Getcategori($id);
    include_once __DIR__."/../view/Admin/form/category-form-edit.php";
}
function delete ($id){
    include_once __DIR__."/../model/category.php";
    deleteCategory($id);


    header("location:http://localhost:8080/mvc/?name=Adminlist&info=category");
}