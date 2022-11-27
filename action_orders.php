<?php

include 'koneksi.php';

$idtrx = $_POST['idtrx'];
$product = $_POST['product'];
$qty = $_POST['qty'];
$address = $_POST['address'];


$query = "insert into orders values ('$idtrx', '$product','$qty', '$address')";
mysqli_query($koneksi, $query);

header("location:myorders.php");
die();
?>
