<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Here</title>
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

    <?php 
        $id_food = $_GET['id'];
        $conn = mysqli_connect('localhost', 'root', '', 'food_culinary');
        $query = mysqli_query($conn, "SELECT * FROM foods where id='$id_food'");
        $baris = mysqli_fetch_assoc($query);
    ?>

<div class="container-fluid mt-3 mb-3 p-2">
    <div class="row">
        <div class=" col mx-auto col-lg-8">
            <div class="border rounded-md shadow p-4 m-2">
                <div class="row">
                    <div class="col mx-auto col-md-4">
                        <h3 >Order Here <?= $baris['name_food']; ?></h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col mx-auto col-md-6 p-3 m-2">
                        <!-- <div class="justify-content-center"> -->
                            <div class="card">
                                <div class="card-body mx-auto justify-content-center">                                
                                
                                <form action="process_order.php" method="POST">
                                    <?php if($baris['image_food']) { ?>
                                        <img src="./asset/img/'<?= $baris['image_food'] ?>'"  class="card-img-top" style="height: 100%; max-height: 250px; width: auto; max-width: 200px;" alt="">
                                    <?php }else{ ?>
                                        <img src="asset/img/food-img.jpg" class="card-img-top" style="height: 100%; max-height: 250px; width: auto; max-width: 200px;" alt="...">
                                    <?php } ?>
                                    
                                    <div class="card-title" style="font-weight:bold;">
                                        <?= $baris['name_food']; ?>
                                    </div>

                                    <p class="card-text">                                        
                                        Harga : Rp.<?= $baris['price']; ?> <br>
                                    </p>
                                    <p class="card-text"><?= $baris['deskripsi']; ?></p>

                                    <input type="hidden" name="food_id" id="food_id" value="<?= $baris['id'] ?>">
                                    <input type="hidden" name="price" id="price" value="<?= $baris['price'] ?>">
                                    <div class="form-group">
                                        <label for="nameorder">Name Order</label>
                                        <input type="text" name="name_order" id="name_order" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Qty</label>                                        
                                        <input type="text" name="qty" class="form-control" id="qty" onchange="totalcalculate()">                                                                                
                                    </div>
                                    <p class="card-text">
                                        Rp.<span id="totalprice"> 0</span>
                                    </p>
                                    <input type="hidden" name="total" id="total">
                                    <input type="hidden" name="name_food" id="name_food" value="<?= $baris['name_food'] ?>">

                                    <div class="form-group">
                                        <button name="process" class="btn btn-primary">Order Now</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        <!-- </div> -->
                    
                    </div>
                   
                    
                </div>                
            </div>
        </div>
    </div>
</div>

</body>
<script>
    function totalcalculate()
    {
        let qty = document.getElementById('qty').value;
        let price = document.getElementById('price').value;
        if(qty == ''){
            qty = 0;
        }

        let qtyParse = parseInt(qty);
        let priceParse = parseInt(price);

        let totalparse = parseInt(qtyParse * priceParse);
        // console.log(totalparse);

        document.getElementById('totalprice').innerHTML = totalparse;
        document.getElementById('total').value = totalparse;
    }
</script>
</html>