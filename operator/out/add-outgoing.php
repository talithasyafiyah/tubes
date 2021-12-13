            <?php
               require_once '../../includes/koneksi.php';
               session_start(); 
         
               if(!isset($_SESSION['id']))
               {
                  header("location: index.php");
               }

               $SQL = "CREATE TABLE IF NOT EXISTS `$_SESSION[id]` (
                  session_id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  product_id VARCHAR(30) NOT NULL,
                  product_name VARCHAR(255) NOT NULL,
                  quantity VARCHAR(50)
                  )";
               $SQL_QUERY = mysqli_query($koneksi, $SQL);

               require_once('header.php');
            ?>
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
                                    <i class="fad fa-plus-square fa-md"></i> 
                                    &nbsp Add Outgoing &nbsp;&nbsp
                                    <small>
                                    <i class="fas fa-angle-double-right fa-xs"></i>
                                    &nbsp;&nbsp Insert Transaction 
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
                     <div class="row">
                        <div class="col-lg-5" style="width: 420.09px">
                           <table class="table table-bordered my-2" id="">
                              <form method="POST" action="" id="Product" onsubmit="return true">
                                 <thead class="thead">
                                    <tr>
                                       <th class="text-left align-middle font-weight-bold" colspan="2">
                                          <i class="fad fa-box-full fa-md"></i>
                                          &nbsp Select Product
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="col-lg-12 col-md-8">
                                          <select name="Select_Product" id="Select_Product" class="w-100">
                                             <option value='0'>Select Product</option>
                                             <?php 
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
                                                      $SQL = "SELECT * FROM data_produk WHERE id_produk = '$ID_PRODUK' LIMIT 1";
                                                      $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                                      if (mysqli_num_rows($SQL_QUERY) > 0)
                                                      {
                                                         $ROW = mysqli_fetch_array($SQL_QUERY);
                                                         $STOCK_AVAILABLE = isset($ROW['stok']) ? $ROW['stok'] : '';
                                                         $BRAND = isset($ROW['brand']) ? $ROW['brand'] : '';

                                                         if ($QUANTITY > $STOCK_AVAILABLE === false)
                                                         {
                                                            $STATUS['success'] = "Item successfully added!";
                                                            $REDUCE_STOCK = "UPDATE data_produk SET stok = $STOCK_AVAILABLE - $QUANTITY WHERE id_produk ='$ID_PRODUK'";
                                                            $REDUCE_STOCK_QUERY = mysqli_query($koneksi, $REDUCE_STOCK);                                                           
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
                                    <tr>
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
                                          <button type="submit" name="add_item" id="add_item" class="btn btn-outline-success px-2 py-1 rounded" style="height: 28px">
                                          <span class="far fa-plus-circle fa-lg"></span> 
                                          <span >&nbsp Add</span>
                                          </button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </form>
                           </table>
                        </div>
                        <div class="col-lg-7">
                           <table class="table table-bordered my-2" id="" style="table-layout: fixed">
                              <form method="POST" action="">
                                 <thead>
                                    <tr>
                                       <th class="text-left align-middle font-weight-bold" colspan="2">
                                          <i class="fad fa-shopping-cart fa-md"></i>
                                          &nbsp Details
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <div class="input-group align-items-center " >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">Date Out</label>
                                             <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" class="col-lg-10 col-sm-6 col-md-6 form-control mr-2" style="height: 28px;">
                                          </div>
                                       </td>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2 ">Session ID</label>
                                             <input type="text" name="out_id" id="out_id" value="<?php echo $_GET['session_id']; ?>" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2" style="height: 28px" disabled>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">Customer</label>
                                             <input type="text" name="customer" id="customer" value="" class="col-lg-12 col-sm-7 col-md-6 form-control mr-2" style="height: 28px">
                                          </div>
                                       </td>
                                       <td >
                                          <div class="input-group align-items-center" >
                                             <label class="col-sm-3 px-0 mb-0 mr-2">Misc.</label>
                                             <input type="text" name="tgl" id="tgl" value="" class="col-lg-12 col-sm-6 col-md-6 form-control mr-2" style="height: 28px" >
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </form>
                           </table>
                                 
                           <table class="table table-bordered mb-2 mx-auto p-auto" style="table-layout: fixed">
                              <thead>
                                 <tr>
                                    <th class="font-weight-bold align-middle" style="border-bottom: none">ID Barang</th>
                                    <th class="font-weight-bold align-middle" style="border-bottom: none">Nama Barang</th>
                                    <th class="font-weight-bold align-middle" style="border-bottom: none">Quantity</th>
                                    <th class="font-weight-bold form-check form-switch" style="border-bottom: none">
                                       <input type="checkbox" id="select-all" name="select-all" class="form-check-input ml-1">
                                          <a class="ml-5">&nbsp Select All</a> 
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $SQL = "SELECT * FROM `$_SESSION[id]`";
                                    $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                    foreach ($SQL_QUERY as $DATA)
                                    {
                                       echo "<tr>
                                                <td class='text-left align-middle'><input class='w-100' style='border: 0' type='text' value=$DATA[product_id] readonly></td>  
                                                <td class='text-left align-middle'><input class='w-100' style='border: 0' type='text' value=$DATA[product_name] readonly></td>  
                                                <td class='text-left align-middle'><input class='w-100' style='border: 0' type='text' value=$DATA[quantity] readonly></td>
                                                <td class='text-center'>
                                                   <form method='POST'>
                                                      <input type='hidden' name='session_id' value=$DATA[session_id]>
                                                      <input type='hidden' name='product_id' value=$DATA[product_id]>
                                                      <input type='hidden' name='brand' value=$DATA[product_name]>
                                                      <input type='hidden' name='quantity_single' value=$DATA[quantity]>
                                                      <input type='checkbox' name='check_product[]' value=$DATA[session_id] class='form-check-input mx-0 d-flex justify-content-center'>
                                                </td>  
                                          </tr>";
                                    }
                                    
                                    if(isset($STATUS['success']))
                                    {
                                       $SQL = "INSERT INTO `$_SESSION[id]` (product_id, product_name, quantity) VALUES ('$ID_PRODUK', '$BRAND', '$QUANTITY')";
                                       $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                       echo "<script>setTimeout(\"location.href = 'add-outgoing.php?session_id=$_SESSION[id]';\");</script>";
                                    }
                                 ?>                                  
                              </tbody>
                           </table>       
                                 <button class="btn btn-primary mb-2 mr-2 px-2 py-2 rounded" style="width: 66.74px">
                                    <span class="far fa-save fa-md"></span> 
                                    <span >&nbsp Save</span>
                                 </button>
                              <div class="text-right float-right">
                                 <button type="submit" name="delete_record" class="btn btn-danger mb-2 px-2 py-2 rounded" style="width: 144.54px" onclick="return confirm('Are you sure want to delete selected item(s)?');">
                                    <span class="far fa-trash fa-lg"></span> &nbsp 
                                    <span id="delete-lable">Delete Selected</span>
                                 </button>
                              </div>
                           </form> <!-- CONNECT TO THIS -->
                           <form method="POST" class="d-inline">
                                 <button type="submit" name="cancel" class="btn btn-secondary mb-2 px-2 py-2 rounded" style="width: 66.74px" onclick="return confirm('Are you sure want to leave this page? Any changes you made will not be saved!')">
                                    <span class="far fa-arrow-left fa-md"></span>
                                    <span >&nbsp Back</span>
                                 </button>
                           </form>
                              <?php
                                 // CANCEL
                                 if (isset($_POST['cancel']))
                                 { 
                                    $SQL = "DROP TABLE `$_SESSION[id]`";
                                    $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                    echo "<script>setTimeout(\"location.href = 'index.php';\");</script>";
                                 }
                                 // DELETE RECORD
                                 if (isset($_POST['delete_record']))
                                 { 
                                    // COUNT NUMBER OF CHECKBOXES CHECKED
                                    $CHECKBOXES = count($_POST['check_product']);
                                    $TEMP_PRODUCT_ID = $_POST['product_id'];
                                    $TEMP_QUANTITY = $_POST['quantity_single'];

                                    for ($INITIAL = 0; $INITIAL < $CHECKBOXES; $INITIAL++)
                                    {
                                       $RECORD_TO_DELETE = $_POST['check_product'][$INITIAL];
                                       $DELETE_TEMP = "DELETE FROM `$_SESSION[id]` WHERE `session_id` = '$RECORD_TO_DELETE'";
                                       $DELETE_TEMP_QUERY = mysqli_query($koneksi, $DELETE_TEMP);

                                       $SQL = "SELECT * FROM data_produk WHERE id_produk = '$TEMP_PRODUCT_ID' LIMIT 1";
                                       $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                       $ROW = mysqli_fetch_array($SQL_QUERY);
                                       $STOCK_AVAILABLE = isset($ROW['stok']) ? $ROW['stok'] : '';
                                       
                                       
                                       $REDUCE_STOCK = "UPDATE data_produk SET stok = $STOCK_AVAILABLE + $TEMP_QUANTITY WHERE id_produk ='$TEMP_PRODUCT_ID'";
                                       $REDUCE_STOCK_QUERY = mysqli_query($koneksi, $REDUCE_STOCK);
                                    }
                                    echo "<script>setTimeout(\"location.href = 'add-outgoing.php?session_id=$_SESSION[id]';\");</script>";
                                 }
                              ?>                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END OF CONTENT -->
            <!-- FOOTER -->
            <?php require_once('footer.php'); ?>
            