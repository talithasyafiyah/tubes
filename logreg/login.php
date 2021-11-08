<?php

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $pesan_error = "";

        include("../includes/koneksi.php");

        $username = mysqli_real_escape_string($koneksi,$username);
        $password = mysqli_real_escape_string($koneksi,$password);

        $query = "SELECT * FROM admin WHERE username = '$username' 
                AND password = '$password'";
        $result = mysqli_query($koneksi,$query);

        if (empty($username)) {
            $pesan_error .= "Username belum diisi";
        } else if (empty($password)) {
            $pesan_error .= "Password belum diisi";
        } else if (mysqli_num_rows($result) == 0 )  { 
        $pesan_error .= "Username atau Password tidak sesuai";
        }

        mysqli_free_result($result);

        mysqli_close($koneksi);

        if ($pesan_error === "") {
        session_start();
        $_SESSION["nama"] = $username;
        header("Location: mainpage.php");
        } 
	

    } else {
	    $pesan_error = "";
        $username = "";
        $password = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="shortcut icon" href="images/boxes.png" type="image/x-icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/ware1.png" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username" value="<?php echo $username ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" value="<?php echo $password ?>"/>
                            </div>
                            <div>
                                <?php
                                    if (isset($pesan)) {
                                    echo "<div class=\"pesan\">$pesan</div>";
                                    }

                                    if ($pesan_error !== "") {
                                    echo "<b style='color: red; text-align: center;'><div class=\"error\">$pesan_error</div><br></b>";
                                    }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <br>
                       <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>