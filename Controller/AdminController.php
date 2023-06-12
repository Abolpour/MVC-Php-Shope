<?php
function panel(){
    include_once __DIR__."/../view/Admin/panel.php";


}
function Panellist($info){
    include_once __DIR__."/../model/shops.php";
    include_once __DIR__."/../model/category.php";
    include_once __DIR__."/../model/product.php";
    include_once __DIR__."/../model/user.php";


    
  if ($info=='products') {
    $data1 =GetProducts();
  } else if ($info=='category') {
    $data1 = Getcategory();
  } else if ($info=='shops') {
    $data1 = GetShops();
  } else if ($info=='users') {
    $data1 = Getusers();
  }
 
 

    include_once __DIR__."/../view/Admin/List.php";


}