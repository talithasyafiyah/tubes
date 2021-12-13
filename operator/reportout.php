<?php
include 'layout/header.php';
?>

               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2><b>Report</b> <small><i class="fa fa-angle-double-right"></i> Outgoing Product <i class="fa fa-angle-double-right"></i>
                              <a type="button" class="btn btn-outline-warning btn-sm"  href="printout.php"><i class="fa fa-print orange_color"></i> Print </a></small></h2>
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
                                             <th class="text-left align-left font-weight-bold">Date</th>
                                             <th class="text-left align-left font-weight-bold">Outgoing ID</th>
                                             <th class="text-left align-left font-weight-bold">Customer</th>
                                             <th class="text-left align-left font-weight-bold">Total Items</th>
                                             <th class="text-left align-left font-weight-bold">Misc</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php

                                          require_once'../includes/koneksi.php';

                                          $query = mysqli_query($koneksi, "SELECT * FROM outgoing");
                                          $no = 1;
                                          foreach ($query as $row) {
                                                echo "<tr>
                                                         <td class='text-left align-left'>$no</td>
                                                         <td class='text-left align-left'>". $row['outgoing_date'] ."</td> 
                                                         <td class='text-left align-left'>". $row['outgoing_id'] ."</td> 
                                                         <td class='text-left align-left'>". $row['customer'] ."</td> 
                                                         <td class='text-left align-left'>". $row['total_items'] ."</td> 
                                                         <td class='text-left align-left'>". $row['misc'] ."</td> 
                                                      </tr>";
                                          $no++;
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