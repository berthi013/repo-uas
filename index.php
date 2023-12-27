<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Culinary</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

</head>
<body class="responsive">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Food Culinary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>      
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<div class="container-fluid mt-3 mb-3 p-2">
    <div class="row">
        <div class=" col col-lg-9">
            <div class="border rounded-md shadow p-4 m-2">
                <div class="row">
                        <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                            $query = mysqli_query($conn, "SELECT * FROM foods");
                            while ($baris = mysqli_fetch_assoc($query)) {
                        ?>
                    <div class="col col-md-3 p-3 m-2">
                        <div class="card p-3" style="width: auto;">
                            <?php if($baris['image_food']) { ?>
                                <img src="asset/img/<?= $baris['image_food'] ?>" class="card-img-top" alt="...">
                            <?php }else{ ?>
                                <img src="asset/img/food-img.jpg" class="card-img-top" alt="...">
                            <?php } ?>
                            <div class="card-body">                                
                                <h5 class="card-title"><?= $baris['name_food'] ?></h5>
                                <p class="card-text">
                                    Harga Rp.<?= $baris['price'] ?>
                                </p>
                                <!-- <a href="./food/edit.php?id=<?php //echo $baris['id'] ?>" class="btn btn-warning"> edit</a> -->

                                <a href="orders.php?id=<?= $baris['id'] ?>" class="btn btn-primary">Proccess Order</a>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                    <div class="col col-md-3 p-3 m-2">
                        <div class="card p-3" style="width: auto;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 p-3 m-2">
                        <div class="card p-3" style="width: auto;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 p-3 m-2">
                        <div class="card p-3" style="width: auto;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="col col-lg-3">
            <div class="border rounded-md p-2 m-2">      
                <h4>List Category</h4> 
                <form action="">
                    
                </form>               
                <ul class="list-group p-2">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>