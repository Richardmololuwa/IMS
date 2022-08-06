<?php
include "connect.php";
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
        <h1>VIEW REPORT</h1>
      </center>
    <div class="container">
        
        <table class="table">
  <thead>
      <tr>      <th scope="col">Productno</th>
      <th scope="col">Productname</th>
      <th scope="col">Category</th>
      <th scope="col">Supplier</th>
      <th scope="col">Quantity</th>
      <th scope="col">Admin</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      </tr>
      
  </thead>
  <tbody>

<?php
    $sql= "select * from Report ";
    $results= mysqli_query($data,$sql);
    if($results){
        while($row=mysqli_fetch_assoc($results)){
            $prono=$row['Productno'];
            $proname=$row['Productname'];
            $category=$row['Category'];
            $supplier=$row['Supplier'];
            $Quantity=$row['Numberofgoods'];
            $Admin=$row['NameofAdmin'];
            $date=$row['date'];
            $Amount=$row['TotalAmount'];
            echo '<tr>
            <th scope="row">'.$prono.'</th>
            <td>'.$proname.'</td>
            <td>'.$category.'</td>
            <td>'.$supplier.'</td>
            <td>'.$Quantity.'</td>
            <td>'.$Admin.'</td>
            <td>'.$date.'</td>
            <td>'.$Amount.'</td>
            
            <td>
           
            </td>
          </tr>';
        }
    }


?>
  
 
  </tbody>
</table>
      
    </div>
    
</body>
</html>