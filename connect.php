<?php
global $conn;
 $conn = mysqli_connect("localhost","root","","mobile","3307");
 if($conn ->connect_error){
  die();
 }

 function fetchData($dataBase){
    global $conn;
    $array = array();

    $query = mysqli_query($conn,"SELECT tensp,gia,soluong FROM $dataBase");
    if($query ->num_rows > 0){
      while($row = $query -> fetch_array()){
        $array[] = $row;
      }
      return $array;
    }else{
      die('không có data');
    }
 }
?>