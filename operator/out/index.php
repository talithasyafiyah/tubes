            <?php
               session_start();
               session_regenerate_id();
               
               require_once '../../includes/koneksi.php';                          
               require_once('header.php'); 
            ?>
            <!-- END OF HEADER -->
            <!-- CONTENT -->
            <div class="midde_cont">
            <div class="container-fluid">
            <div class="row column_title">
               <div class="col-md-12">
                  <div class="page_title">
                        <h2>
                           <i class="fas fa-truck fa-sm"></i> &nbsp Outgoing Product &nbsp;&nbsp
                           <small><i class="fas fa-angle-double-right fa-xs"></i></small> 
                           &nbsp;&nbsp
                           <form method="POST" class="d-inline">
                              <button name='add-outgoing' class="btn btn-outline-success py-2 px-2 rounded">
                                 <span class="fas fa-plus-square fa-lg"></span> 
                                 <span >&nbsp Add Outgoing</span>
                              </button>
                           </form>
                           <?php
                              if(isset($_POST['add-outgoing']))
                              {                                                            
                                 $_SESSION['id'] = session_id();

                                 echo "<script>setTimeout(\"location.href = 'add-outgoing.php?session_id=$_SESSION[id]';\");</script>";
                              }
                           ?>
                        </h2>
                  </div>
               </div>
            </div>
            <div class="row column1">
               <div class="col-lg-12">
                  <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                           <div class="heading1 margin_0">
                              <h2>Result</h2>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table">
                              <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead class="thead-dark">
                                       <tr>
                                          <th class="text-left align-middle font-weight-bold">No.</th>
                                          <th class="text-left align-middle font-weight-bold">Tanggal</th>
                                          <th class="text-left align-middle font-weight-bold">ID Keluar</th>
                                          <th class="text-left align-middle font-weight-bold">Customer</th>
                                          <th class="text-left align-middle font-weight-bold">Total Items</th>
                                          <th class="text-left align-middle font-weight-bold">Misc</th>
                                          <th class="text-center align-center font-weight-bold" data-orderable="false">Details</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          $SQL = "SELECT * FROM outgoing";
                                          $SQL_QUERY = mysqli_query($koneksi, $SQL);
                                          
                                          if ($SQL_QUERY -> num_rows >0)
                                          {
                                             while ($ROW = $SQL_QUERY -> fetch_assoc())
                                             {
                                                echo "<tr>
                                                         <form method='GET' action='outgoing-details.php?'>
                                                            <td class='text-left align-middle'>". $ROW['user_id'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['outgoing_date'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['outgoing_id'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['customer'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['total_items'] ."</td> 
                                                            <td class='text-left align-middle'>". $ROW['misc'] ."</td>
                                                            <td class='text-center align-center'>
                                                               <input type='hidden' name='id' value=" . $ROW['user_id'] . "> 
                                                               <button type='submit' title='Details' class='btn btn-outline-info'>
                                                                  <span class='fad fa-folder-open fa-lg'></span>
                                                               </button>
                                                         </form
                                                            </td>
                                                      </tr>";
                                             }
                                          }
                                       ?>
                                    </tbody>
                              </table>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
            <!-- END OF CONTENT -->
            <!-- FOOTER -->
            <?php require_once('footer.php'); ?>
            <script>
               $(document).ready(function() 
               {
                  $('#dataTable').DataTable();
               });
            </script>