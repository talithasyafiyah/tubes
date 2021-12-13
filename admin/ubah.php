<?php
include 'layout/header.php';
?>
              <!-- dashboard inner -->

                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2><b><a href="manuser.php">Management User</a></b></h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-lg-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2></h2>
                              </div>
                                
                                <!-- Card Body -->
                            <?php
                            require_once'../includes/koneksi.php';
                            $id = $_POST['id'];
                            $query = "SELECT * FROM user WHERE id=$id";
                            $hasil = mysqli_query($koneksi, $query);
                            foreach ($hasil as $data){
                            ?>

                            <?php
                                if(isset($_POST['btnUbah'])) {
                                    $no = $_POST['id'];
                                    $user = $_POST['username'];
                                    $pass = md5($_POST['password']);
                                    $nama = $_POST['nama'];
                                    $email = $_POST['email'];
                                    
                                    if ($koneksi) {
                                        $sql = "UPDATE user SET username='$user', nama='$nama', email='$email' WHERE id=$no";
                                        mysqli_query($koneksi,$sql);
                                        echo "<br><p class='alert alert-primary text-center'><b>Account has been updated.</p>";
                                    } else {
                                        echo "<p class='alert alert-danger text-center'><b>Terjadi kesalahan:$error</b></p>";
                                    }
                                }
                            ?>
                            
                           <form method="POST" class="my-login-validation" novalidate="">
                              <input hidden type="number" name="id" value="<?php echo $data['id']; ?>">
                              <div class="form-group">
                                 <label for="name">Username</label>
                                 <input value="<?php echo $data['username']; ?>" id="name" type="text" class="form-control" name="username" required autofocus>
                                 <div class="invalid-feedback">
                                    What's your username?
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="password">Password</label>
                                 <input value="<?php echo $data['password']; ?>" id="password" type="password" class="form-control" name="password" required data-eye>
                                 <div class="invalid-feedback">
                                    Password is required
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="name">Name</label>
                                 <input value="<?php echo $data['nama']; ?>" id="name" type="text" class="form-control" name="nama" required autofocus>
                                 <div class="invalid-feedback">
                                    What's your name?
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="email">E-Mail Address</label>
                                 <input value="<?php echo $data['email']; ?>" id="email" type="email" class="form-control" name="email" required>
                                 <div class="invalid-feedback">
                                    Your email is invalid
                                 </div>
                              </div>


                              <div class="form-group m-0">
                                 <button name="btnUbah" type="submit" class="btn btn-primary btn-block">
                                    Update
                                 </button>
                              </div>
      
                           </form>
                           <div>
                            <?php } ?>
						   
                                  </div>
      
                                </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
<?php
include 'layout/footer.php';
?>