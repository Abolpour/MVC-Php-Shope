<?php
session_start();
function dd($string){
    var_dump($string);die();
}
if ($_GET['name']=='index' && isset($_GET['id'])){
    include_once 'Controller/HomeController.php';
    shop($_GET['id']);

}else if ($_GET['name']=='index') {
 include_once 'Controller/HomeController.php';

     home();
 } elseif ($_GET['name']=='Admin'){
   
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminController.php';
    panel();

 }elseif ($_GET['name']=='Adminlist'){
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminController.php';
    Panellist($_GET['info']);
 }
 elseif ($_GET['name']=='Admin/category/create') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminCategoryController.php';
   create();
 }
 elseif ($_GET['name']=='Admin/category/update') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminCategoryController.php';
    if(isset($_GET['id'])){
      update($_GET['id']);
   }else {
    update();
   } 
}
elseif ($_GET['name']=='Admin/category/delete') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminCategoryController.php';
   delete($_GET['id']);
}
elseif ($_GET['name']=='Admin/product/create') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminProductController.php';
   create();
}
elseif ($_GET['name']=='Admin/product/update') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminProductController.php';
    if(isset($_GET['id'])){
      update($_GET['id']);
   }else {
    update();
   }
}
elseif ($_GET['name']=='Admin/product/delete') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminProductController.php';
  delete($_GET['id']);
}
elseif ($_GET['name']=='Admin/shops/create') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminShopsController.php';
   create();
}
elseif ($_GET['name']=='Admin/shops/update') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminShopsController.php';
 if(isset($_GET['id'])){
    update($_GET['id']);
 }else {
  update();
 }
}
elseif ($_GET['name']=='Admin/shops/delete') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminShopsController.php';
  delete($_GET['id']);
}
elseif ($_GET['name']=='Admin/user/create') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminUserController.php';
    create();
 }
 elseif ($_GET['name']=='Admin/user/update') {
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminUserController.php';
    if(isset($_GET['id'])){
      update($_GET['id']);
   }else {
    update();
   }
 }
 elseif ($_GET['name']=='Admin/user/delete') {
  if(!isset($_SESSION['user'])){
    var_dump('go back u cant stay here');die();
  }
    include_once 'Helper/AssetsManager.php';
    include_once 'Controller/AdminUserController.php';
   delete($_GET['id']);
 }
 else  {
    var_dump('page not found');
} 
