<?php
if(isset($_GET['filter'])){
  $filter = $_GET['filter'];
}
include 'connect.php';
include 'product.php';



$arrayProduct = fetchData('sanpham');
addProductFromDB($arrayProduct);


switch($filter){
  case 'getProductOver10Million':
   $result = getProductPriceOver10Million();
  break;
  default:  
}

// echo $arrayProduct;
echo json_encode($result);
