<?php
include 'layout/header.php';
?>
              <!-- dashboard inner -->
               <div class="midde_cont">
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
                                    <h2>Management User</h2>
                              </div>
                                 <div class="table_section padding_infor_info">
                                    <div class="table">
                                    
                                    <table class="table" id="dataTable">
                                       <thead >
                                          <tr>
                                             <th class="text-left align-left font-weight-bold">No</th>
                                             <th class="text-left align-left font-weight-bold">Username</th>
                                             <th class="text-left align-left font-weight-bold">Nama</th>
                                             <th class="text-left align-left font-weight-bold">Email</th>
                                             <th class="text-left align-left font-weight-bold">Level</th>
                                             <th class="text-center align-center font-weight-bold" colspan="2">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php

                                          require_once'../includes/koneksi.php';

                                          $query = mysqli_query($koneksi, "SELECT * FROM user");

                                          $no = 1;
                                          foreach ($query as $row) {
                                                echo "<tr>
                                                         <td class='text-left align-left'>". $no++ ."</td> 
                                                         <td class='text-left align-left'>". $row['username'] ."</td> 
                                                         <td class='text-left align-left'>". $row['nama'] ."</td> 
                                                         <td class='text-left align-left'>". $row['email'] ."</td> 
                                                         <td class='text-left align-left'>". $row['level'] ."</td>

                                                         <td> <form method='POST' action='ubah.php'>
                                                         <input hidden type='text' name='id' value=".$row['id'].">
                                                         <button type='submit' name='btnUpdate' class='btn btn-success btn-sm'>
                                                         Update</button></form></td>

                                                         <td><form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\"method='POST';>
                                                         <input hidden name='id' type='text' value=".$row['id'].">
                                                         <button type='submit' name='btnHapus' class='btn btn-danger btn-sm'>Delete</button>
                                                         </form></td>
                                                      </tr>";
                                          }

                                       ?>
                                       <?php
                                        if (isset($_POST['btnHapus'])){
                                            
                                            $id = $_POST['id'];
                                           
                                            if ($koneksi){
                                                $sql = "DELETE FROM user WHERE id=$id";
                                                mysqli_query($koneksi, $sql);
                                                echo "<p class='alert alert-success text-center'><b>Data Akun Berhasil Dihapus.</b></p>";
                                    
                                            } else {
                                                echo "<p class='alert alert-danger text-center'><b>Data gagal dihapus. Terjadi kesalahan: ";
                                            }
                                        }
                                    ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
<?php
include 'layout/footer.php';
?>