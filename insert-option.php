<?php 
if(isset($_POST['submit'])){
  $products = $_POST['products'];
  if(!empty($products)){
      $query = "INSERT INTO inventory (productName) VALUES('$products')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
  }

?>