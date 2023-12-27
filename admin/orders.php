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
    <title>Orders</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">

</head>
<body class="responsive">
<main>

<div class="container mt-3">
    <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-white col-lg-3" style="width: 280px;">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Food Culinary</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link" aria-current="page">
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
                <a href="orders.php" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="foods.php" class="nav-link active">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Foods
                </a>
              </li>
              <li>
                <a href="users.php" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                  Customers
                </a>
              </li>
              <li>
                <a href="logout.php" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                  Logout
                </a>
              </li>
            </ul>
            <hr>
      </div>

        <div class="col col-lg-9 p-4">
          <a href="food/create.php" class="btn btn-primary m-2">Add a New food</a>
            <div class="border rounded-md shadow p-4 m-2">
                <h4>Foods </h4>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                                $query = mysqli_query($conn, "SELECT * FROM foods");
                                while ($baris = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                <th scope="row"><?= $baris['id'] ?></th>
                                <td><?= $baris['name_food']; ?></td>
                                <td><?= $baris['price']; ?></td>
                                <td><?= $baris['category']; ?></td>
                                <td><?= $baris['deskripsi']; ?></td>
                                <td>
                                    <a href="./food/edit.php?id=<?php echo $baris['id'] ?>" class="btn btn-warning"> edit</a>
                                    <a href="" class="btn btn-danger"> hapus</a>
                                </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
                    
                </div>                
            </div>
        </div>
       
    </div>
</div>

</main>
</body>
</html>