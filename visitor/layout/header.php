<?php
session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Maaf, Anda tidak dapat kembali ke dashboard'); document.location='../pages/login.php'</script>";
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Dashboard Visitor</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- CSS only -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" >
      <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <link rel="stylesheet" href="css/btn.css" />
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!-- Script ChartJS -->
      <script src="js/chart.js"></script>
      <!-- Teks Animasi -->
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/styleAnimasi.css">
      <!-- Komentar -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page contact_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="operator.html"><img class="logo_icon img-responsive" style="width: auto;" src="images/logo/status.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/logo/donii.jpeg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?=$_SESSION['nama']?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="dashboardvis.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li><a href="mdpop.php"><i class="fa fa-desktop orange_color2"></i> <span>Master Data Product</span></a></li>
                     <li><a href="testimoni.php"><i class="fa fa-comments-o red_color"></i> <span>Testimoni</span></a></li>
                     <li><a href="commentVisitor.php"><i class="fa fa-thumbs-o-up green_color"></i> <span>Commentar</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="operator.html"><img class="img-responsive" style="width: auto;" src="images/logo/UD. SATU 7AN.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/logo/donii.jpeg" alt="#" /><span class="name_user"><?=$_SESSION['nama']?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profileadmin.php">My Profile</a>
                                       <a class="dropdown-item" href="settingsadmin.php">Settings</a>
                                       <a class="dropdown-item" href="#">Help</a>
                                       <a class="dropdown-item" href="../pages/logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
            <!-- end topbar -->