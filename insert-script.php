<?php 
if(isset($_POST['submit'])){
  $productName = $_POST['products'];
  $quantity = $_POST['quantity'];
     if(!empty($productName) && !empty($quantity)){
      $query = "INSERT INTO inventory (productName, quantity) VALUES('$productName', '$quantity')";
      $result = $conn->query($query);
     
      if($result){
        echo "Student detail is inserted successfully";
      }  
    }
  }
?>