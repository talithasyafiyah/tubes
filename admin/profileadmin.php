<?php
include 'layout/header.php';
?>
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>User profile</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img"><img width="180" class="rounded-circle" src="images/logo/donii.jpeg" alt="#" /></div>
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3><?=$_SESSION['nama']?></h3>
                                                <p><strong>Privilege: </strong><?=$_SESSION['level']?></p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-user"></i> &nbsp: <?=$_SESSION['username']?></li>
                                                   <li><i class="fa fa-envelope-o"></i> : <?=$_SESSION['email']?></li>
                                                </ul>
                                             </div>
                                          
                                          </div>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
                        <!-- end row -->
                     </div>
<?php
include 'layout/footer.php';
?>