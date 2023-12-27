<?php 
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../404.php");
}
?>

<?php
if(isset($_POST['update']))
{
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST[''];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        // $role = 2;
        // $created_at = date("Y/m/d H:i:s");
        $updated_at = date("Y/m/d H:i:s");

        //query untuk update user
        $koneksikan = mysqli_connect('localhost', 'root', '', 'food_culinary');
        $query = "UPDATE INTO users SET namae='$nama', email='$email', address='$address', phone='$phone', role='$role', created_at='$created_at', updated_at='$updated_at'";

}
