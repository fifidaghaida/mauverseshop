<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];

//upload gambar
$gambar = upload();
if( !$gambar ){
    return false;
}


$query = "insert into image values ('$id','$name', '$image')";
mysqli_query($koneksi, $query);

header("location:user.php");

function upload(){
    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if( $error === 4 ){
        echo"<script>
            alert('Pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = end($ekstensiGambar);
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo"<script>
            alert('File yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if( $ukuranFile > 2000000 ){
        echo"<script>
            alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    //lolos pengecekan, gambar siap diupload
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'user_image/' . $namaFileBaru);

    return $namaFileBaru;
}

die();
?>
