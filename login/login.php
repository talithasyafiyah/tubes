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
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
	<link rel="shortcut icon" href="logostock.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Login</h3>
						<form action="login.php" method="POST" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="username" placeholder="Username" value="<?php echo $username ?>">
						  
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" name="password" placeholder="Password" value="<?php echo $password ?>">
	            </div>
				
					<?php
    					if (isset($pesan)) {
      					echo "<div class=\"pesan\">$pesan</div>";
  						}

    					if ($pesan_error !== "") {
      					echo "<b style='color: red; text-align: center;'><div class=\"error\">$pesan_error</div><br></b>";
 	 					}
					?>
				
	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>


	
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

