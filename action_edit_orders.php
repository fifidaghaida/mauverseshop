<?php

    //panggil koneksi
    include 'koneksi.php';

    //menyimpan data kedalam variabel
    $idtrx = $_POST['idtrx'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];
    $address = $_POST['address'];

    $query="UPDATE orders SET 
            product='$product',
            qty='$qty',
            address='$address'
            where idtrx='$idtrx'";

    mysqli_query($koneksi, $query);
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);

    header("location:myorders.php");
    die();

?>