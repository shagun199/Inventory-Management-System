<?php 
include '_dbconnect.php';
if(isset($_POST['submit'])){
  $productName = $_POST['products'];
  $quantity = $_POST['quantity'];

  $check_product = "SELECT * FROM `products` WHERE `productName` = '$productName'";
     if(!empty($productName) && !empty($quantity) && $quantity > 0 && $check_product != $productName){

      $query = "INSERT INTO products (productName, quantity) VALUES('$productName', '$quantity')";
      $result = $conn->query($query);
     
      if($result){
        echo "Student detail is inserted successfully";
      }  
      else{
        echo "Student detail is not inserted successfully";
      }    }
  }
?>


$sql = "UPDATE `products` SET `quantity` = `quantity` + '$quantity' WHERE `productName` = '$productName'";