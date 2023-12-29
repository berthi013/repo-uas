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
    $id_order = $_POST['id'];
    $status = 1;
    $updated_at = date("Y/m/d H:i:s");
    $query = "UPDATE orders SET status='$status', updated_at='$updated_at' WHERE id='$id_order'";
    $prosesquery = mysqli_query($koneksikan, $query);
    // "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    echo "<script>alert('Sukses Mengkonfirmasi Order!'); location = '../orders.php'</script>";
}else{
    echo "<script>alert('Gagal Mengkonfirmasi Order!'); location = '../orders.php'</script>";
}