<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../404.php");
}
?>
<?php
if (isset($_POST['insert'])) {
    // if (isset($_FILES['image'])) {
        // $gambar_barang = $_FILES['image']['name'];
        // $target = "images/" . basename($_FILES['image']['name']);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST[''];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $role = 2;
        $created_at = date("Y/m/d H:i:s");
        $updated_at = date("Y/m/d H:i:s");

        //query untuk simpan user
        $koneksikan = mysqli_connect('localhost', 'root', '', 'food_culinary');
        $query = "INSERT INTO users SET namae='$nama', email='$email', address='$address', phone='$phone', role='$role', created_at='$created_at', updated_at='$updated_at'";
        $prosesquery = mysqli_query($koneksikan, $query);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "Gambar barang berhasil diupload";
        } else {
            echo "gagl upload";
        }
    // }
    echo "<script>alert('Sukses Menambahkan Barang!'); location = 'barang.php'</script>";
} else {
    echo "<script>alert('Gagal Menambahkan Barang!'); location = 'tambah.php'</script>";
}