<?php
include 'layout/header.php';
?>
              <!-- dashboard inner -->
              <div class="midde_cont">
                 <div class="container-fluid">
                    <div class="row column_title">
                       <div class="col-md-12">
                          <div class="page_title">
                             <h2>Data <small><i class="fa fa-angle-double-right"></i> Barang <i class="fa fa-angle-double-right"></i>
                             <a type="button" class="btn btn-outline-warning btn-sm"  href="insertmdp.php"><i class="fa fa-plus-circle orange_color"></i> Add Barang </a></small>
                          </div>
                       </div>
                    </div>
                    <!-- row -->
                    <div class="row column1">
                       <div class="col-lg-12">
                          <div class="white_shd full margin_bottom_30">
                             <div class="full graph_head">
                                <div class="heading1 margin_0">
                                   <h2>Master Data Product</h2>
                                </div>
                             </div>
                                <div class="table_section padding_infor_info">
                                   
                                   <table class="table" id="dataTable">
                                      <thead >
                                         <tr>
                                            <th class="text-left align-left font-weight-bold">No.</th>
                                            <th class="text-left align-left font-weight-bold">ID Barang</th>
                                            <th class="text-left align-left font-weight-bold">Description</th>
                                            <th class="text-left align-left font-weight-bold">Company</th>
                                            <th class="text-left align-left font-weight-bold">Stock</th>
                                            <th class="text-left align-left font-weight-bold">Price</th>
                                            <th class="text-left align-left font-weight-bold" data-orderable="false">Action</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                      <?php

                                         require_once'../includes/koneksi.php';

                                         $SQL = "SELECT * FROM mdpop";
                                         $SQL_QUERY = mysqli_query($koneksi, $SQL);
                                         $no = 1;

                                         if ($SQL_QUERY-> num_rows >0)
                                         {
                                            while ($ROW = $SQL_QUERY-> fetch_assoc())
                                            {
                                               echo "<tr>
                                                        <td class='text-left align-left'>". $no++ ."</td> 
                                                        <td class='text-left align-left'>". $ROW['id_barang'] ."</td> 
                                                        <td class='text-left align-left'>". $ROW['description'] ."</td> 
                                                        <td class='text-left align-left'>". $ROW['company'] ."</td> 
                                                        <td class='text-left align-left'>". $ROW['stock'] ."</td>
                                                        <td class='text-left align-left'>". $ROW['price'] ."</td>  
                                                        <td class='text-center align-center'> 
                                                           <a href='#' class='btn btn-outline-info d-inline-block justify-content-center'>
                                                              <i class='fa fa-folder-open-o fa-lg'></i>
                                                           </a>
                                                           <a href='#' class='btn btn-outline-success d-inline-block justify-content-center'>
                                                              <i class='fa fa-pencil fa-lg'></i>
                                                           </a>
                                                           <a href='#' class='btn btn-outline-danger d-inline-block justify-content-center'>
                                                              <i class='fa fa-trash-o fa-lg'></i>
                                                           </a>
                                                        </td>
                                                     </tr>";
                                            }
                                            echo "</table>";
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