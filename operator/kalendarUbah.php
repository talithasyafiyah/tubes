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
        <title>Update Calendar</title> 
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- site icon -->
        <link rel="icon" href="images/fevicon.png" type="image/png" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
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
        <!-- Script ChartJS -->
        <script src="js/chart.js"></script>
        <!-- Calendar -->
        <link href="css/fullcalendar.css" rel="stylesheet" />
        <script src="js/fullcalendar.js"></script>
        

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="dashboard dashboard_1">
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
                            <h6><?=$_SESSION['username']?></h6>
                            <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li><a href="dashboardop.html"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                        <li>
                            <a href="#dataproduct" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cubes purple_color"></i> <span>Data Product</span></a>
                            <ul class="collapse list-unstyled" id="dataproduct">
                            <li><a href="categoryproduct.html">> <span>Category Product</span></a></li>
                            <li><a href="brandproduct.html">> <span>Brand Product</span></a></li>
                            </ul>
                        </li>
                        <li><a href="mdpop.html"><i class="fa fa-desktop orange_color2"></i> <span>Master Data Product</span></a></li>
                        <li><a href="in.html"><i class="fa fa-shopping-cart blue1_color"></i> <span>Incoming Product</span></a></li>
                        <li><a href="out.html"><i class="fa fa-truck red_color"></i> <span>Outgoing Product</span></a></li>
                        <li>
                            <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-print green_color"></i> <span>Report</span></a>
                            <ul class="collapse list-unstyled" id="report">
                            <li><a href="reportmdp.php">> <span>Master Data Product</span></a></li>
                            <li><a href="reportin.php">> <span>Incoming Product</span></a></li>
                            <li><a href="reportout.php">> <span>Outgoing Product</span></a></li>
                            </ul>
                        </li>
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
                                        <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/logo/donii.jpeg" alt="#" /><span class="name_user"><?=$_SESSION['username']?></span></a>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item" href="profileop.html">My Profile</a>
                                        <a class="dropdown-item" href="settingsop.html">Settings</a>
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
                
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                            <div class="page_title">
                                <h2>Dashboard</h2>
                            </div>
                            </div>
                        </div>
                        
                <!-- Update Jadwal Kalendar -->
                <div class="row column2 graph margin_bottom_30">
                    <div class="col-md-l2 col-lg-12">
                        <div class="white_shd full">
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Activity Update</h2>
                                </div>
                            </div>
                            <div class="full graph_revenue">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="content">
                                        <div class="card-body">

                                        <?php 
                                            include "../includes/koneksi.php";
                                            $id = $_POST['id'];
                                            $query = "SELECT * FROM kalendar_operator WHERE id='$_POST[id]'";
                                            $hasil = mysqli_query($koneksi, $query);

                                            
                                            foreach ($hasil as $data) {
                                        ?>

                                        <form method="POST" class="my-login-validation" novalidate="true">
                                            <input hidden type="number" value="<?php echo $data['id']; ?>" name="id">
                                            <div class="form-group">
                                                <label for="kegiatan">Activity Description</label>
                                                <input id="kegiatan" type="text" value="<?php echo $data['kegiatan']; ?>" class="form-control" name="kegiatan" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="mulai">Start Date</label>
                                                <input id="mulai" type="date" value="<?php echo $data['mulai']; ?>" class="form-control" name="mulai" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="selesai">End Date</label>
                                                <input id="selesai" type="date" value="<?php echo $data['selesai']; ?>" class="form-control" name="selesai" required data-eye>
                                            </div>

                                            <div class="form-group m-0">
                                                <button name="btnUbah" type="submit" class="btn btn-primary btn-block">
                                                    Update Activity
                                                </button>
                                            </div>
                                        </form>

                                        <?php 
                                            }
                                        ?>

                                        <?php 
                                            if(isset($_POST['btnUbah'])) {
                                                $no = $_POST['id'];
                                                $keg = $_POST['kegiatan'];
                                                $mul = $_POST['mulai'];
                                                $sel = $_POST['selesai'];

                                                if($koneksi) {
                                                    $sql = "UPDATE kalendar_operator SET kegiatan='$keg', mulai='$mul', selesai='$sel' WHERE id=$no";
                                                    mysqli_query($koneksi, $sql);
                                                    echo "<script>alert('Data Jadwal Kegiatan Berhasil Diubah');location='dashboardop.php';</script>";
                                                    }
                                                    
                                            }
                                        ?>

                                            </div>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                        


                    </div>
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2021 Designed by UD. SATU 7AN. All rights reserved.<br><br>
                            Distributed By: <a href="#">UD. SATU 7AN</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="js/animate.js"></script>
        <!-- select country -->
        <script src="js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.js"></script> 
        <!-- chart js -->
        <script src="js/Chart.min.js"></script>
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="js/perfect-scrollbar.min.js"></script>
        <script>
            var ps = new PerfectScrollbar('#sidebar');
        </script>
        <!-- custom js -->
        <script src="js/custom.js"></script>

        <!-- Kalendar -->
        <script src="js/moment.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [<?php 
                            $data = mysqli_query($koneksi, "SELECT * FROM kalendar_operator");
                            
                            while ($d = mysqli_fetch_array($data)) {     
                        ?>
                        {  title: '<?php echo $d['kegiatan']; ?>',
                            start: '<?php echo $d['mulai']; ?>',
                            end: '<?php echo $d['selesai']; ?>'    
                        },
                        <?php 
                            } 
                        ?> ],
                        
                selectOverlap: function (event) {
                    return event.rendering === 'background';
                }
                });

                calendar.render();
            });
        </script>
    </body>
</html>