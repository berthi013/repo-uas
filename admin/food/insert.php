<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../404.php");
}
?>
<?php
if (isset($_POST['insert'])) {
    // if (isset($_FILES['image'])) {
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

        
        // $carbon_now = new Carbon();
        
        // $nama_barang = $_POST['nama_barang'];
        $nama = $_POST['name_food'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $created_at = date("Y/m/d H:i:s");
        $updated_at = date("Y/m/d H:i:s");
        // var_dump($nama, $price, $description, $category, $gambar_makanan , $created_at, $updated_at);

        //query untuk simpan makanan
        $koneksikan = mysqli_connect('localhost', 'root', '', 'food_culinary');
        // if($koneksikan){
        //     echo "sukses";
        // }
        // $query = "INSERT INTO foods SET name_food='$nama', price='$price', deskripsi='$description', category='$category', image_food='$gambar_makanan', created_at='$created_at', updated_at='$updated_at'";
        $query = "INSERT INTO foods (name_food, price, deskripsi, category, image_food, created_at, updated_at) VALUES ('$nama', '$price', '$description', '$category', '$gambar_makanan', '$created_at', '$updated_at')";
        $prosesquery = mysqli_query($koneksikan, $query);

        // if($prosesquery)
        // {
        //     echo "sukses proses";
        // }

        // if(isset($_FILES['image'])){
        //     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        //         echo "Gambar barang berhasil diupload";
        //     } else {
        //         echo "gagl upload";
        //     }
        // }
        
    // }
    echo "<script>alert('Sukses Menambahkan Makanan!'); location = '../foods.php'</script>";
} else {
    echo "<script>alert('Gagal Menambahkan Makanan!'); location = './create.php'</script>";
}