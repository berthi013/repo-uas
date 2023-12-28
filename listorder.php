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
  </div>
</nav>

<div class="container-fluid mt-3 mb-3 p-2">
    <div class="row">
        <div class=" col mx-auto col-lg-8">
            <div class="border rounded-md shadow p-4 m-2">
                <div class="row">
                        <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
                            $query = mysqli_query($conn, "SELECT * FROM orders");
                            // $baris = mysqli_fetch_assoc($query);
                            // if($baris > 0)
                            // {  
                            while ( $baris = mysqli_fetch_assoc($query))
                            // var_dump($baris);                                                      
                              {
                        ?>
                    <div class="col col-md-3 p-3 m-2">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name Order</th>
                                <th scope="col">Name Food</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Time Order</th>
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
                                        <td><?= $baris['name_order']; ?></td>
                                        <td><?= $baris['name_food']; ?></td>
                                        <td><?= $baris['price']; ?></td>
                                        <td><?= $baris['qty']; ?></td>
                                        <td><?= $baris['total']; ?></td>
                                        <td><?= $baris['status']; ?></td>
                                        <td><?= $baris['created_at']; ?></td>
                                    
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                    </div>
                        <?php }
                    // }else{ ?>
                        <!-- <div class="mx-auto">
                            Belum ada list order
                        </div> -->
                    <?php //} ?>
                </div>                
            </div>
        </div>
        <!-- <div class="col col-lg-3">
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
        </div> -->
    </div>
</div>

</body>
</html>