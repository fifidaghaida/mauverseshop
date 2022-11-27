<?php
    include 'koneksi.php';

    //ambil data dari url
    $idtrx = $_GET['idtrx'];

    $query ="delete from orders where idtrx='$idtrx'";
    mysqli_query($koneksi,$query);

    header("location:myorders.php");
    die();
?>