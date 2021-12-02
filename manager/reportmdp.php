<?php
include '../layout/header.php';
?>
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2><b><a href="reportmdp.php">Report</a></b> <small><i class="fa fa-angle-double-right"></i> Master Data Product <i class="fa fa-angle-double-right"></i>
                              <a type="button" class="btn btn-outline-warning btn-sm"  href="printmdp.php"><i class="fa fa-print orange_color"></i> Print </a></small></h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-lg-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Report</h2>
                              </div>
                                 <div class="table_section padding_infor_info">
                                    <div class="table">
                                    
                                    <table class="table" id="dataTable">
                                       <thead >
                                          <tr>
                                             <th class="text-left align-left font-weight-bold">No</th>
                                             <th class="text-left align-left font-weight-bold">ID Barang</th>
                                             <th class="text-left align-left font-weight-bold">Produk</th>
                                             <th class="text-left align-left font-weight-bold">Perusahaan</th>
                                             <th class="text-left align-left font-weight-bold">Stok</th>
                                             <th class="text-left align-left font-weight-bold">Harga</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php

                                          require_once'../includes/koneksi.php';

                                          $query = mysqli_query($koneksi, "SELECT * FROM data_produk");

                                          $no = 1;
                                          foreach ($query as $row) {
                                                echo "<tr>
                                                         <td class='text-left align-left'>". $no++ ."</td> 
                                                         <td class='text-left align-left'>". $row['id_barang'] ."</td> 
                                                         <td class='text-left align-left'>". $row['produk'] ."</td> 
                                                         <td class='text-left align-left'>". $row['perusahaan'] ."</td> 
                                                         <td class='text-left align-left'>". $row['stok'] ."</td> 
                                                         <td class='text-left align-left'>". $row['harga'] ."</td> 
                                                      </tr>";
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
include '../layout/footer.php';
?>