<?php 
include 'koneksi.php';
session_start();
 
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']); 
 


$sql = "SELECT * FROM login where username='$username' and password='$password'";
$result = mysqli_query($koneksi, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
      

        $_SESSION['login_user'] = $username;
        header("location: home.php");

}
} else {
    
    $_SESSION['invalid'] = 'Username atau Password Salah!';
    header("location: login.php");
}


?>