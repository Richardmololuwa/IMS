<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $prono=$_POST['prono'];
    $proname=$_POST['proname'];
    $category=$_POST['category'];
    $supplier=$_POST['supplier'];
    $costprice=$_POST['costprice'];
    $Quantity=$_POST['quantity'];
   
    $date=$_POST['date'];
   
    $sql="insert into Addstock (Productno, Productname, Category, Supplier, CostPerunit, Quantity,Date)
    values ('$prono','$proname','$category','$supplier','$costprice','$Quantity','$date')";

    $results=mysqli_query($data,$sql);
    if($results){
        // echo"registration sucessful";
        header('location:Viewstock.php');
    }
    else{
        die(mysqli_error($data));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h2>MAXVALUE</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Inventory
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Addstock.php">Add Stock</a></li>
                  <li><a class="dropdown-item" href="Viewstock.php">View Stock</a></li>
                  
                  <li><a class="dropdown-item" href="Available Product.php">Available Stock</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Create Reprt
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Report.php">Report</a></li>
                  <li><a class="dropdown-item" href="viewreport.php">View Report</a></li>
                 
                  
                </ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Beverages.php">Beverages</a></li>
                  <li><a class="dropdown-item" href="Household.php">Household</a></li>
                  <!-- <li><a class="dropdown-item" href="Pet Supplies.php">Pet Supplies</a></li>
                  <li><a class="dropdown-item" href="Frozen Foods.php">Frozen Foods</a></li> -->
                  <li><a class="dropdown-item" href="Toiletries.php">Toiletries</a></li>
                  <li><a class="dropdown-item" href="Alcohol.php">Alcohol</a></li>
                  <li><a class="dropdown-item" href="Soft drinks.php">Soft drinks</a></li>
                  <!-- <li><a class="dropdown-item" href="Confectionaries.php">Confectionaries</a></li>
                  <li><a class="dropdown-item" href="Fruits.php">Fruits</a></li>
                  <li><a class="dropdown-item" href="Appetizers.php">Appetizers</a></li> -->
                  
                </ul>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Viewwprofile.php">Profile</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" class="btn btn-outline-success" type="submit">Search</button>
              
            </form>
            <button class="btn btn-outline-light" href="login.php" onclick="document.location='login.php'" type="submit"><a >Logout</a></button>
              <!-- <a  href="login.php">Logout</a> -->
          </div>
        </div>
      </nav>
      <center>
        <h1>ADD STOCK</h1>
      </center>
      
    <div class="container my-5">
        <form method="post">
    <div class="mb-3">
        <label class="form-label">Product ID</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
        name="prono" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
        name="proname" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label class="form-label">Category</label>
        
        <select class="form-select" id="inputGroupSelect01" name="category">
            <!-- <option selected>Choose Category...</option>
            <option value="Beverages">Beverages</option>
            <option value="Household">Household</option>
            <option value="Pet Supplies">Pet Supplies</option>
            <option value="Frozen Foods">Frozen Foods</option>
            <option value="Toiletries">Toiletries</option>
            <option value="Alcohol">Alcohol</option>
            <option value="Soft drinks">Soft drinks</option>
            <option value="Confectionaries">Confectionaries</option>
            <option value="Three">Three</option>
            <option value="Appetizers">Appetizers</option>
            <option value="Fabrics">Fabrics</option> -->
            <option selected>Choose Category...</option>
            <option value="Beverages">Beverages</option>
            <option value="Household">Household</option>
          
            <option value="Toiletries">Toiletries</option>
            <option value="Alcohol">Alcohol</option>
            <option value="Soft drinks">Soft drinks</option>
           
        </select>
        <!-- <select name="Select Supplier" placeholder="Select Supplier">
        <option value="Beverages">Beverages</option>
        <option value="Household">Household</option>
        <option value="Pet Supplies">Pet Supplies</option>
        <option value="Frozen Foods">Frozen Foods</option>
        <option value="Toiletries">Toiletries</option>
        <option value="Alcohol">Alcohol</option>
        <option value="Soft drinks">Soft drinks</option>
        <option value="Confectionaries">Confectionaries</option>
        <option value="Fruits">Fruits</option>
        <option value="Appetizers">Appetizers</option>
        <option value="Fabrics">Fabrics</option>
    </select> -->
    </div>
    <!-- <div class="mb-3">
        <label class="form-label">Supplier</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
        name="supplier" aria-describedby="emailHelp"> -->
    <div class="mb-3">
    <label class="form-label">Supplier</label>
        
        <select class="form-select" id="inputGroupSelect01" name="supplier">
        <option value="Mama Gold">Mama Gold</option>
            <option value="Mrs Ola">Mrs Ola</option>
            <option value="The Peters">The Peters</option>
            <option value="Pet Dr.James">Pet Dr.James</option>
            <option value="Mrs Aluko">Mrs Aluko</option>
            <option value="Femi">Femi</option>
           
        </select>
    </div>
    
        
    <div class="input-group mb-3">
    
        <span class="input-group-text">Cost per unit</span>
        <span class="input-group-text">$</span>
        <input type="text" class="form-control"  name="costprice" aria-label="Dollar amount (with dot and two decimal places)">
        <span class="input-group-text">0.00</span>
        
    </div>
    <div class="mb-3">
    <label class="form-label">Number of Product brought in.</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
        name="quantity" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
    <label class="form-label">Date</label>
        <input type="date" class="form-control" id="exampleInputEmail1" placeholder=""
        name="date" aria-describedby="emailHelp">
    </div>
    
    <!-- <div class="mb-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your password"
        name="Address" aria-describedby="emailHelp">
    </div>

    <select name="Select Supplier" placeholder="Select Supplier">
        <option value="Beverages">Beverages</option>
        <option value="Household">Household</option>
        <option value="Pet Supplies">Pet Supplies</option>
        <option value="Frozen Foods">Frozen Foods</option>
        <option value="Toiletries">Toiletries</option>
        <option value="Alcohol">Alcohol</option>
        <option value="Soft drinks">Soft drinks</option>
        <option value="Confectionaries">Confectionaries</option>
        <option value="Fruits">Fruits</option>
        <option value="Appetizers">Appetizers</option>
        <option value="Fabrics">Fabrics</option>
    </select><br><br> -->

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

   
   
    
</body>
</html>