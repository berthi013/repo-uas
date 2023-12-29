<?php 
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../404.php");
}
?>

<?php
if(isset($_GET['id'])){
    $id  = $_GET['id'];
    // query SQL untuk delete data

    $koneksikan = mysqli_connect('localhost', 'root', '', 'food_culinary');
    $query = "DELETE from foods where id='$id'";

    $prosesquery = mysqli_query($koneksikan, $query);
    echo "<script>alert('Sukses Menghapus Makanan!'); location = '../foods.php'</script>";
}else{
    echo "<script>alert('Gagal Menghapus Makanan!'); location = '../foods.php'</script>";
}