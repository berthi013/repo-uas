<?php 
include 'connect.php';
$mysqli = new mysqli('localhost', 'root', '', 'food_culinary');

if(isset($_POST['process'])){
    $name_order = $_POST['name_order'];
    $food_id = $_POST['food_id'];
    $name_food = $_POST['name_food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $_POST['total'];
    $created_at = date("Y/m/d H:i:s");
    $updated_at = date("Y/m/d H:i:s");
    $status = 2;
    // var_dump($name_food, $name_order, $food_id, $price, $qty, $total, $created_at, $updated_at);

    //query untuk simpan order
    $koneksikan = mysqli_connect('localhost', 'root', '', 'food_culinary');
    $query = "INSERT INTO orders (name_order,  food_id, price, name_food, qty, total, status, created_at, updated_at) VALUES ('$name_order', '$food_id', '$price', '$name_food', '$qty', '$total', '$status','$created_at', '$updated_at')";
    $prosesquery = mysqli_query($koneksikan, $query);

    echo "<script>alert('Sukses Melakukan Order!'); location = 'index.php'</script>";
}else{
    echo "<script>alert('Gagal Melakukan Order!'); location = 'index.php'</script>";
}