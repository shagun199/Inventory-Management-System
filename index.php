<$php 
include '_dbconnect.php';
if(isset($_POST['submit'])){
  $products = $_POST['products'];
  $quantity = $_POST['quantity'];
  if(!empty($products)){
      $query = "INSERT INTO inventory (productName, quantity) VALUES('$products', '$quantity')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>Inventory Management System</title>
</head>
<body>
<?php include '_dbconnect.php';?>
<?php include 'insert_script.php';?>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inventory Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <form action="insert-script.php" method="POST">
    <div class="dropdown">
        <label for:"products">Add Products</label>
        <select id="products" name="products">
          <option value="Mobile">Mobile</option>
          <option value="Mobile">PC</option>
          <option value="Mobile">Laptop</option>
        </select>
    </div>
    <br>
    <div class="dropdown">
      <label for:"quantity">Select Quantity</label>
        <select id="quantity" name="quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
    </div> <br>
    <input type="submit" class="btn btn-primary" value="Add" name = "submit">
  </form>
  </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
