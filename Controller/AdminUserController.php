<?php
function create(){
    if ($_POST) {
        include_once __DIR__."/../model/user.php";

        $usernam=$_POST['usernam'];
        $pasword=$_POST['pasword'];
        if ($usernam=='' && $usernam==null ){
           echo "username is empty" ;
       }
        if ($pasword=='' && $pasword==null) {
           echo "password is empty";
        }
        CreateUser($usernam,$pasword);
                
         header("location:http://localhost:8080/mvc/?name=Adminlist&info=users");
        }
     }
    include_once __DIR__."/../view/Admin/form/users-form.php";

function update($id=null){
    include_once __DIR__."/../model/user.php";
if($_POST){

    $usernam=$_POST['usernam'];
    $pasword=$_POST['pasword'];
   
   
   if ($usernam=='' && $usernam==null ){
       echo "username is empty" ;
   }
    if ($pasword=='' && $pasword==null) {
       echo "password is empty";
    }

    updateUser($usernam,$pasword,$id);
    header("location:http://localhost:8080/mvc/?name=Adminlist&info=users");
}


   $users=Getusers($id);
    include_once __DIR__."/../view/Admin/form/users-form-edit.php";
}
function delete ($id){
    include_once __DIR__."/../model/user.php";
deleteuser($id);


    header("location:http://localhost:8080/mvc/?name=Adminlist&info=users");
}