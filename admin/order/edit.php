<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm a Order</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">

</head>
<body class="responsive">

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
                            $id_order = $_GET['id'];
                            $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                            $query = mysqli_query($conn, "SELECT * FROM orders WHERE id='$id_order'");
                            $baris = mysqli_fetch_assoc($query);
                            // while ($baris = mysqli_fetch_assoc($query)) {}
                        ?>
                            <input type="hidden" name="id" id="id" value="<?= $baris['id'] ?>">
                            <div class="form-group">
                                <label for="nameorder">Name Order</label>
                                <input name="name_order" type="text" class="form-control" id="name_order" value="<?= $baris['name_order']; ?>" readonly>
                            </div>    
                            <div class="form-group">
                                <label for="name">Name Food</label>
                                <input type="text" name="name_food" id="name_food" class="form-control" value="<?= $baris['name_food']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input name="price" type="text" class="form-control" id="price" value="<?= $baris['price']; ?>" readonly>
                            </div>                            
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input name="qty" type="text" class="form-control" id="qty" value="<?= $baris['qty']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input name="total" type="text" class="form-control" id="total" value="<?= $baris['total']; ?>" readonly>
                            </div>                                                                            
                            
                            <div class="form-group">
                                <label for="category">Status Konfirmasi</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Pilih Category</option>
                                    <option value="1"  >Konfirmasi</option>
                                    <option value="2" >Pending</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="img">Upload Image</label>
                                <input type="file" name="image_food" id="image_food" class="form-control">

                            </div> -->
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <input type="submit" name="update" id="update" value="Update" class="btn btn-primary mr-2">

                        </form>

                    </div>
                   
                </div>                
            </div>
        </div>
       
    </div>
</div>

</body>
</html>