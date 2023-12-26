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
      <!-- <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li> -->
    </ul>
    
  </div>
</nav>

<div class="container-fluid mt-3 mb-3 p-2">
    <div class="row">
        <div class=" col col-lg-9">
            <div class="border rounded-md shadow p-4 m-2">
                <div class="row">
                    <div class="col col-md-6 p-3 m-2">
                        <div class="justify-content-center">
                            <div class="card">
                                <?php 
                                     $id_food = $_GET['id'];
                                     $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                                     $query = mysqli_query($conn, "SELECT * FROM foods where id='$id_food'");
                                     $baris = mysqli_fetch_assoc($query);
                                ?>
                                <form action="" method="POST">
                                    <img src="./asset/img/'<?= $image_food ?>'" alt="">
                                    <p>
                                        <?php $name_food; ?> <br>
                                        <?php $price; ?> <br>
                                    </p>
                                    <p><?php $description; ?></p>

                                    <div class="form-group">
                                        <button class="btn btn-primary">Order Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                   
                    
                </div>                
            </div>
        </div>
        <!-- <div class="col col-lg-3">
            <div class="border rounded-md p-2 m-2">      
                <h4>List Category</h4>      
                
                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>
        </div> -->
    </div>
</div>

</body>
</html>