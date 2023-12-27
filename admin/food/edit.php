<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Food</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">

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
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Food Culinary</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="../index.php" class="nav-link" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="../orders.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="../foods.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Foods
        </a>
      </li>
      <li>
        <a href="../users.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
      <li>
        <a href="../logout.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Logout
        </a>
      </li>
    </ul>
    <hr>
  </div>

        <div class="col col-lg-9 p-4">
            <div class="border rounded-md shadow p-4 m-2">
                <h4>Foods </h4>
                <?php
                // use Carbon\Carbon;
                // $carbon = date("Y/m/d H:i:s");
                // echo $carbon;
                ?>
                <div class="row">
                    <div class="col">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                        <?php
                            $id_makanan = $_GET['id'];
                            $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                            $query = mysqli_query($conn, "SELECT * FROM foods WHERE id='$id_makanan'");
                            $baris = mysqli_fetch_assoc($query);
                            // while ($baris = mysqli_fetch_assoc($query)) {}
                        ?>
                            <input type="hidden" name="id" id="id" value="<?= $baris['id'] ?>">
                            <div class="form-group">
                                <label for="name">Name Food</label>
                                <input type="text" name="name_food" id="name_food" class="form-control" value="<?= $baris['name_food']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input name="price" type="text" class="form-control" id="price" value="<?= $baris['price']; ?>">
                            </div>                                                      
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $baris['deskripsi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Pilih Category</option>
                                    <option value="makanan" <?php if($baris['category'] == 'makanan'){  ?>selected <?php }?> >Makanan</option>
                                    <option value="minuman" <?php if($baris['category'] == 'minuman'){  ?>selected <?php }?>>Minuman</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="img">Upload Image</label>
                                <input type="file" name="image_food" id="image_food" class="form-control">

                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <input type="submit" name="update" id="update" value="update" class="btn btn-primary mr-2">

                        </form>

                    </div>
                   
                </div>                
            </div>
        </div>
       
    </div>
</div>

</body>
</html>