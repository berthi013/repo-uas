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
        <a class="nav-link" href="listorder.php">List Order</a>
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
                <h4>Menu Here</h4>
                <div class="row">
                        <?php
                            $category = $_GET['category'];
                            $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                            $query = mysqli_query($conn, "SELECT * FROM foods WHERE category='$category'");
                            // $baris = mysqli_fetch_assoc($query);
                            // if($baris > 0){
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
                                    Category : <?= $baris['category'] ?> <br>
                                    Harga Rp.<?= $baris['price'] ?>
                                </p>

                                <a href="orders.php?id=<?= $baris['id'] ?>" class="btn btn-primary">Proccess Order</a>
                            </div>
                        </div>
                    </div>
                        <?php } ?>                            
                   
                </div>                
            </div>
        </div>
        <div class="col col-lg-3">
            <div class="border rounded-md p-2 m-2">      
                <h4>List Category</h4>              
                <ul class="list-group p-2">
                    <li class="list-group-item"><a href="category.php?category=makanan" style="color:black;">Makanan</a></li>
                    <li class="list-group-item"><a href="category.php?category=minuman" style="color:black;">Minuman</a></li>
                    <li class="list-group-item"><a href="category.php?category=snack" style="color:black;">Snack</a></li>
            </div>
        </div>
    </div>
</div>

</body>
</html>