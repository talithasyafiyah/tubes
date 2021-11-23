<?php
session_start();

include('../includes/koneksi.php');

if (isset($_POST['submit'])) {

$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = $_POST['password'];

    if (empty($username)) {
        header("location:login.php?pesan=username");
    } elseif (empty($password)) {
        header("location:login.php?pesan=password");
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        $cek = mysqli_num_rows($query);
        if ($cek > 0) {
            $row = mysqli_fetch_array($query);
            $password_hash = $row['password'];
            if (password_verify($password, $password_hash)) {
                $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
                $multi = mysqli_fetch_assoc($data);
                $cekuser = $multi['level'];

                if($cekuser == "Operator") {
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "Operator";
                    header("location:../operator/dashboardop.php");

                } elseif ($cekuser == "Admin") {
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "Admin";
                    header("location:../admin/dashboardadm.php");

                } elseif ($cekuser == "Manager") {
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "Manager";
                    header("location:../manager/dashboardman.php");

                } elseif ($cekuser == "Visitor") {
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "Visitor";
                    header("location:../visitor/dashboardvis.php");
                    
                } else {
                    echo "gagal";
                }
            
            } else {
                header("location:login.php");
                echo 'gagal';
            }
        } else {
            header("location:login.php");
            echo 'gagal';
        }
    }
}

?>