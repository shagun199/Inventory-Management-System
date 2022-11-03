<?php 
if(isset($_POST['submit'])){
  $quantity = $_POST['quantity'];
  if(!empty($products)){
      $query = "INSERT INTO inventory (quantity) VALUES('$quantity')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
  }

?>