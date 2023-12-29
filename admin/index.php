<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../404.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">

</head>
<body class="responsive">
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->

<div class="container mt-3">
    <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-white" style="width: 225px;">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Food Culinary</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
     
      <li>
        <a href="orders.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="foods.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Foods
        </a>
      </li>
      <!-- <li>
        <a href="users.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li> -->
      <li>
        <a href="logout.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Logout
        </a>
      </li>
    </ul>
    <hr>
  </div>

        <div class="col p-4">
            <div class="border rounded-md shadow p-4 m-2">
            <h4>Admin Dashboard</h4>
                <div class="row">                    
                    <div class="col col-md-3 p-1 m-3">
                        <div class="card p-2 bg-primary" style="width: auto;">
                            <!-- <img src="asset/img/kelrelastabel.jpeg" class="card-img-top" alt="..."> -->
                            <?php 
                                  $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                                  $query = mysqli_query($conn, "SELECT * FROM foods");

                                  $rowcount = mysqli_num_rows( $query );                                  
                            ?>
                            <div class="card-body">
                                <h5 class="card-title" style="color:white;">Total Foods</h5>
                                <p class="card-text ">
                                    <h4 class="mx-auto" style="color:white;"> <?= $rowcount ?></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 p-1 m-3">
                        <div class="card p-2 bg-warning" style="width: auto;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <?php 
                                  $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                                  $query = mysqli_query($conn, "SELECT * FROM orders");

                                  $orderscount = mysqli_num_rows( $query );                                  
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">Total Orders</h5>
                                <p class="card-text">
                                  <h4 class="mx-auto" > <?= $orderscount ?> </h4>                                  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 p-1 m-3">
                        <div class="card p-2 bg-secondary" style="width: auto;">
                            <?php 
                                  $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                                  $query = mysqli_query($conn, "SELECT * FROM orders WHERE status=2");

                                  $pendingcount = mysqli_num_rows( $query );                                  
                            ?>
                            <div class="card-body">
                                <h5 class="card-title" style="color:white">Orders Pending</h5>
                                <p class="card-text">
                                   <h4 class="mx-auto" style="color:white;"><?= $pendingcount ?></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-3 p-1 m-3">
                        <div class="card p-2 bg-success" style="width: auto;">
                            <!-- <img src="asset/img/kelrelastabel.jpeg" class="card-img-top" alt="..."> -->
                            <?php 
                                  $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                                  $query = mysqli_query($conn, "SELECT * FROM orders WHERE status=1");

                                  $donecount = mysqli_num_rows( $query );                                  
                            ?>
                            <div class="card-body">
                                <h5 class="card-title" style="color:white;">Orders Complete</h5>
                                <p class="card-text ">
                                    <h4 class="mx-auto" style="color:white;"> <?= $donecount ?></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
       
    </div>
</div>

</body>
</html>