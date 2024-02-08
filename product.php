<?php
  $product = array();
  function addProduct ($name,$price,$quantity){
             global $product;
             $products = array(
               'name' => $name,
               'gia' => $price,
               'soluong' =>$quantity
             );
         $product[] = $products;
  }

  function addProductFromDB($arrayProduct){
   if(sizeof($arrayProduct) > 0){
      foreach($arrayProduct as $products ){
          $name = $products['tensp'];
          $price = $products['gia'];
          $quantity = $products['soluong'];
          addProduct($name,$price,$quantity);
      }
   }
   else {
      die();
   }
  }

  function  getProductPriceOver10Million(){
   global $product;
   $array = array_filter($product);
   
   $count = sizeof($array);
   echo "<pre>";
   $result = array();
   for($index = 0;$index < $count;$index++){
      if($array[$index]['gia'] > 10000000){
         array_push($result,$array[$index]);
      }
   }
   return $result;
  
   
}
?>