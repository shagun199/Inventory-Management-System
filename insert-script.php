<?php 
include '_dbconnect.php';
if(isset($_POST['submit'])){
  $productName = $_POST['products'];
  $quantity = $_POST['quantity'];

  $check_product = "SELECT quantity FROM `products` WHERE `productName` = '$productName'";
  $conn->query($check_product);
     if(!empty($productName) && !empty($quantity) && !empty($check_product)){
      $sql = "UPDATE `products` SET `quantity` = `quantity` + '$quantity' WHERE `productName` = '$productName'";
      $conn->query($sql);
     }
     else if(!empty($productName) && !empty($quantity)){
      $query = "INSERT INTO products (productName, quantity) VALUES('$productName', '$quantity')";
      $result = $conn->query($query);
     
      if($result){
        echo "Student detail is inserted successfully";
      }  
     }
      else{
        echo "Student detail is not inserted successfully";
      }    
  }
?>


<!-- $sql = "UPDATE `products` SET `quantity` = `quantity` + '$quantity' WHERE `productName` = '$productName'"; -->