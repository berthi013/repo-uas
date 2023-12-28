<?php 
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../404.php");
}
?>

<?php
if(isset($_POST['update']))
{
    $koneksikan = mysqli_connect('localhost', 'root', '', 'food_culinary');
    $id_food = $_POST['id_food'];

    $img_food = $_POST['image_food'];
    $oldimg = "SELECT * FROM foods WHERE id='$id_food'";

    // $get_old_img = $prosesquery = mysqli_query($koneksikan, $oldimg);
    // var_dump( $get_old_img);

    $gambar_makanan = null;
    if(isset($_FILES['image_food'])){
        $gambar_makanan = $_FILES['image_food']['name'];
        $target = "../../asset/img/" . basename($_FILES['image_food']['name']);

        if (move_uploaded_file($_FILES['image_food']['tmp_name'], $target)) {
            // echo "Gambar barang berhasil diupload";
            $gambar_makanan = $_FILES['image_food']['name'];
        } else {
            // echo "gagl upload";
            $gambar_makanan = null;
        }
    }

    $nama = $_POST['name_food'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    // $created_at = date("Y/m/d H:i:s");
    $updated_at = date("Y/m/d H:i:s");
    $query = "UPDATE foods SET name_food='$nama', price='$price', deskripsi='$description', category='$category', status='$status', updated_at='$updated_at' WHERE id='$id_order'";

    echo "<script>alert('Sukses Mengupdate Makanan!'); location = '../foods.php'</script>";
}else{
    echo "<script>alert('Gagal Mengupdate Makanan!'); location = '../foods.php'</script>";
}