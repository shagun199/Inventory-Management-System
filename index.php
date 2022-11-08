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
<?php include 'insert-script.php';?>
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
    <form action="" method="POST">
    <div class="dropdown">
        <label for:"products">Add Products</label>
        <input type="text" name="products" id="products" required>
        <label for:"amount">Enter Amount</label>
        <input type="number" name="amount" id="amount" required>
    </div>
    <br>
    <div class="dropdown">
      <label for:"quantity">Select Quantity</label>
        <select id="quantity" name="quantity">
        <?php
        for( $i=1; $i<=10; $i++ )
        {
         echo '<option value="'.$i.'"> '.$i.'</option>';
        }
        ?>
        </select>
    </div> <br>
    <input type="submit" class="btn btn-primary" value="Add" name = "submit">
  </form>
  <div class="container">
  <?php 
    $query = "SELECT * FROM products";
    $ans = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($ans, MYSQLI_ASSOC);
    if((!$row)) {
      echo '<p>Nothing in the Inventory </p>';
    }
    else {
      echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Product Name</font> </td> 
          <td> <font face="Arial">Product Quantity</font> </td> 
          <td> <font face="Arial">Amount</font> </td> 
          <td> <font face="Arial">Delete Product</font> </td> 
      </tr>';
      if ($result = $conn->query($query)) {
          while ($row = $result->fetch_assoc()) {
              $productId = $row["productId"];
              $ProductName = $row["productName"];
              $Quantity = $row["quantity"];
              $Amount = $row["amount"];
              echo '<tr> 
                        <td>'.$ProductName.'</td> 
                        <td>'.$Quantity.'</td> 
                        <td>'.$Amount.'</td>
                        <td>
                         <form action="index.php" method="POST"> 
                            <input type="submit" class="btn btn-danger" name="delete" value="Delete" >
                         </form>
                        </td>
                    </tr>';
          }
          $result->free();
          }
          if(isset($_POST['delete'])) {
            $delete = ("DELETE from products where productId = '$productId'");
            $result = $conn->query($delete);
            header("location:index.php");
          }
} 
?>
</div>

</div>
<script>
  if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
