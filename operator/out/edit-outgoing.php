            <?php require_once('header.php'); ?>
            <!-- END OF HEADER -->
            <!-- CONTENT -->
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <div class="row">
                                    <div class="col-xs-3 col-sm-4 col-md-6 col-lg-7 align-self-center">
                                       <h2>
                                          <i class="fad fa-edit fa-md"></i> 
                                          &nbsp Edit Outgoing &nbsp;&nbsp
                                          <small>
                                          <i class="fas fa-angle-double-right fa-xs"></i>
                                             &nbsp;&nbsp No. Referensi : 
                                             <a class="text-success">
                                                <?php echo rand(10, 100) + date('ymdHis'); ?> 
                                             </a>
                                          </small>
                                       </h2>
                                    </div>
                                    <div class="col-xs-3 col-sm-4 col-md-6 col-lg-5 align-self-center text-right">  
                                       <i class="fad fa-calendar-week fa-md"></i>   
                                       <span class="font-weight-bold">&nbsp Tanggal : 
                                          <span class="text-primary">
                                             <?php
                                                echo date("D, j F Y, G:i");
                                             ?>
                                          </span>
                                       </span>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="row column1">
               <div class="col-lg-12">
                  <div class="white_shd full margin_bottom_30 px-2">
                        <div class="row justify-content-center">
                           <div class="col-lg-5" style="width: 420.09px">
                              <table class="table table-bordered my-2" id="">
                                    <form action="">
                                       <thead class="thead">
                                          <tr>
                                             <th class="text-left align-middle font-weight-bold" colspan="2">
                                                <i class="fad fa-box-full fa-md"></i>
                                                &nbsp Add New Product
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td class="col-lg-12 col-md-8">
                                                <select name="Select_Product" id="Select_Product" class="w-100">
                                                   <option value='0'>Select Product</option>
                                                   <?php 
                                                      require_once '../../includes/koneksi.php';

                                                      $SQL = "SELECT * FROM data_produk";
                                                      $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                                      if ($SQL_QUERY -> num_rows > 0)
                                                      {
                                                         while ($ROW = $SQL_QUERY -> fetch_assoc()) // HERE $ROW IS ARRAY
                                                         {
                                                            echo "<option value=".$ROW['id_produk'].">" . $ROW['brand'] . ' ' . $ROW['harga'] . '(pcs)' ."</option>"; 
                                                         }
                                                      }
                                                   ?>
                                                   <?php
                                                      if (isset($_POST['add_item']))
                                                      {
                                                         $ID_PRODUK = $_POST['Select_Product'];
                                                         $QUANTITY = $_POST['quantity'];
                                                         if ($ID_PRODUK == "0" && empty($QUANTITY) || $ID_PRODUK == "0" && !empty($QUANTITY) )
                                                         {
                                                            $STATUS['error'] = "Please select at least 1 product!";
                                                         }
                                                         else if ($ID_PRODUK != "0" && empty($QUANTITY))
                                                         {
                                                            $STATUS['error'] = "Please fill the quantity field!";
                                                         }
                                                         else if ($ID_PRODUK != "0" && $QUANTITY <= 0)
                                                         {
                                                            $STATUS['error'] = "Quantity must be greater than 0!";
                                                         }
                                                         else
                                                         {
                                                            $SQL = "SELECT stok FROM data_produk WHERE id_produk = '$ID_PRODUK' LIMIT 1";
                                                            $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                                            if (mysqli_num_rows($SQL_QUERY) > 0)
                                                            {
                                                               $ROW = mysqli_fetch_array($SQL_QUERY);
                                                               $STOCK_AVAILABLE = isset($ROW['stok']) ? $ROW['stok'] : '';

                                                               if ($QUANTITY > $STOCK_AVAILABLE === false)
                                                               {
                                                                  $STATUS['success'] = "Item successfully added!";
                                                               }
                                                               else
                                                               {
                                                                  $STATUS['error'] = "Insufficient stock (stock remaining : $STOCK_AVAILABLE)";
                                                               }
                                                            }
                                                         }
                                                      }
                                                   ?>
                                                </select>
                                             </td>
                                             <td>
                                                <input type="number" name="quantity" placeholder="Quantity" style="height: 28px; width: 68px">
                                             </td>
                                          </tr>
                                          <tr >
                                                <td>
                                                <?php 
                                                   if (isset($STATUS['error']) || isset($STATUS['success'])) echo
                                                   '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                         <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                         </symbol>
                                                         <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                         </symbol>
                                                   </svg>'; 
                                                ?>
                                                <div class="row justify-content-center">
                                                   <div class="alert col-lg-11 col-md-8 col-sm-6 col-xs-4 
                                                      <?php 
                                                         if (isset($STATUS['error']))
                                                         {
                                                            echo "alert-danger";
                                                         } 
                                                         if (isset($STATUS['success']))
                                                         {
                                                            echo "alert-success";
                                                         }
                                                      ?>
                                                      justify-content-center d-flex align-items-center mb-0 py-1 px-0" role="alert" style="height: 28px" id="alert">
                                                      <svg class="bi flex-shrink-0 " width="30" height="15" role="img" aria-label="Danger:">
                                                         <?php
                                                            if (isset($STATUS['error']))
                                                            {
                                                               echo '<use xlink:href="#exclamation-triangle-fill"/>';
                                                            }
                                                            if (isset($STATUS['success']))
                                                            {
                                                               echo '<use xlink:href="#check-circle-fill"/>';
                                                            }
                                                         ?>
                                                      </svg>
                                                      <div class="text-center align-middle">
                                                         <?php 
                                                            if(isset($STATUS['error']))
                                                            {
                                                               echo $STATUS['error'];
                                                            }
                                                            if(isset($STATUS['success']))
                                                            {
                                                               echo $STATUS['success'];
                                                            }
                                                         ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                             <td colspan="2">                                         
                                                <a href="add-issuing.php" class="btn btn-outline-success px-2 py-1 rounded" style="height: 28px">
                                                <i class="far fa-plus-circle fa-lg"></i> 
                                                <span >&nbsp Add</span>
                                                </a>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </form>
                              </table>
                           </div>
                           <div class="col-lg-7">
                              <table class="table table-bordered my-2" id="" style="table-layout: fixed">
                                    <thead>
                                       <tr>
                                          <th class="text-left align-middle font-weight-bold" colspan="2">
                                             <i class="fad fa-shopping-cart fa-md"></i>
                                             &nbsp Outgoing Edit
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="input-group align-items-center " >
                                                <label class="col-sm-3 px-0 mb-0 mr-2">Date Out</label>
                                                <input type="date" name="date" id="date" value="<?php echo date('d-m-Y'); ?>" class="col-lg-10 col-sm-6 col-md-6 form-control mr-2" style="height: 28px;">
                                             </div>
                                          </td>
                                          <td >
                                             <div class="input-group align-items-center" >
                                                <label class="col-sm-3 px-0 mb-0 mr-2 ">No. Ref</label>
                                                <input type="text" name="tgl" id="tgl" value="PHP HERE" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2" style="height: 28px"  disabled>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td >
                                             <div class="input-group align-items-center" >
                                                <label class="col-sm-3 px-0 mb-0 mr-2">Customer</label>
                                                <input type="text" name="tgl" id="tgl" value="PHP HERE" class="col-lg-12 col-sm-7 col-md-6 form-control mr-2" style="height: 28px" >
                                             </div>
                                          </td>
                                          <td >
                                             <div class="input-group align-items-center" >
                                                <label class="col-sm-3 px-0 mb-0 mr-2">Misc.</label>
                                                <input type="text" name="tgl" id="tgl" value="PHP HERE" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2" style="height: 28px" >
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                              </table>
                                  
                              <table class="table table-bordered mb-2 mx-auto p-auto" style="table-layout: fixed">
                                 <thead>
                                    <tr>
                                       <th class="font-weight-bold" style="border-bottom: none">ID Barang</th>
                                       <th class="font-weight-bold" style="border-bottom: none">Nama Barang</th>
                                       <th class="font-weight-bold" style="border-bottom: none">Quantity</th>
                                       <th class="font-weight-bold" style="border-bottom: none">
                                          
                                          <a href="" class="text-danger">
                                             <i class="fad fa-trash fa-md text-danger"></i>
                                             &nbsp Delete All
                                          </a> 
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       require_once '../../includes/koneksi.php';
                                       
                                       $SQL = "SELECT * FROM outgoing WHERE user_id = '$_GET[id]'";
                                       $SQL_QUERY = mysqli_query($koneksi, $SQL);
                                       
                                       if ($SQL_QUERY -> num_rows > 0)
                                       {
                                          while($ROW = $SQL_QUERY -> fetch_assoc()) // HERE $ROW IS ARRAY
                                          { 
                                             $NAMA_BARANG = explode(",", $ROW['product_name']);                                                        
                                             $INDEX_NAMA_BARANG = 0;
                                             $QUANTITY = explode(",", $ROW['quantity']);   
                                             $INDEX_QUANTITY = 0;                                  
                                             foreach(explode(",", $ROW['product_id']) as $RESULT)
                                             {                                                     
                                                echo 
                                                "<tr>
                                                   <td class='text-left align-middle'>$RESULT.</td>";
                                                echo 
                                                "  <td class='text-left align-middle'>$NAMA_BARANG[$INDEX_NAMA_BARANG]</td>";
                                                echo 
                                                "  <td class='text-left align-middle'>$QUANTITY[$INDEX_QUANTITY]</td>
                                                   <td class='text-left align-middle'>
                                                      <a href='' class='text-danger'>
                                                         <i class='fad fa-minus-circle fa-md text-danger'></i>
                                                         &nbsp Delete
                                                      </a> 
                                                   </td>
                                                </tr>";
                                                $INDEX_NAMA_BARANG++;
                                                $INDEX_QUANTITY++;
                                             }  
                                          }
                                       }
                                       
                                    ?>
                                    
                                 </tbody>
                              </table>                    
                                 <a href="add-issuing.php" class="btn btn-outline-primary mb-2 mr-2 px-2 py-2 rounded" >
                                    <i class="fad fa-save fa-lg"></i> 
                                    <span >&nbsp Save</span>
                                 </a>
                                 <a href="index.php" class="btn btn-outline-danger mb-2 px-2 py-2 rounded" >
                                    <i class="far fa-times fa-lg"></i> 
                                    <span >&nbsp Cancel</span>
                                 </a>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
            <!-- END OF CONTENT -->
            <!-- FOOTER -->
            <?php require_once('footer.php'); ?>