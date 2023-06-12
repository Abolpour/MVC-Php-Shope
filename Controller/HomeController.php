<?php
function home()
{
   include_once __DIR__."/../model/shops.php";
   $shops = GetShops();
    
    include_once __DIR__."/../view/Home.php";
}

function shop($id){
    
    include_once __DIR__."/../model/shops.php";
    include_once __DIR__."/../model/product.php";
    $shop=Getshop($id);
    
    $products=GetProductsByShopid($id);
    include_once __DIR__."/../view/shop.php";
}


