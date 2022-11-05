<?php 
include '_dbconnect.php';
if(isset($_POST['submit'])){
  $prodName = $_POST['products'];
  $quantity = $_POST['quantity'];


  $sqliQuery= "SELECT quantity,productName FROM `products` WHERE `productName` = '$prodName'";
      if ($result = $conn->query($sqliQuery)) {    
          while ($row = $result->fetch_object()) {
              $nameOfProduct = $row->productName;
              $productQuantity = $row->quantity;
          }
          $result->close();
      }
      else
      {
        echo 'something went wrong';
      }
     if(!empty($prodName) && !empty($quantity) && !empty($productQuantity) && $nameOfProduct === $prodName){
      $sql = "UPDATE `products` SET `quantity` = `quantity` + '$quantity' WHERE `productName` = '$prodName'";
      $conn->query($sql);
     }
     else if(!empty($prodName) && !empty($quantity)){
      $query = "INSERT INTO products (productName, quantity) VALUES('$prodName', '$quantity')";
      $result = $conn->query($query);
     
      if($result){
        echo "Item inserted successfully";
      }  
     }
      else{
        echo "Item insertion failed";
      }    
  }
?>


