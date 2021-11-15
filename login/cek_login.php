<?php
session_start();

include('../includes/koneksi.php');

if (isset($_POST['submit'])) {

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);

    if (empty($username)) {
        header("location:login.php?pesan=username");
    } elseif (empty($password)) {
        header("location:login.php?pesan=password");
    } else {
        $login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
        $cek = mysqli_num_rows($login);
        if($cek > 0){
            $data = mysqli_fetch_assoc($login);

            if($data['level'] == "Supplier") {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Supplier";
                header("location:home_supplier.php");

            } elseif ($data['level'] == "Member") {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Member";
                header("location:home_member.php");

            } elseif ($data['level'] == "Admin") {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Admin";
                header("location:home_admin.php");

            } else {
                echo "gagal";
            }

    } else {
        header("location:login.php?pesan=gagal");
        echo "gagal bro";
    }
    }
}

?>