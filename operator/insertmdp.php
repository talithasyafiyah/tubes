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
                             Insert</small>
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
                             <div class="contain">
                                <div class="section-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="booking-form">
                                                <form method="POST">
                                                    <div class="form-group">
                                                        <span class="form-label">ID Barang</span>
                                                        <input class="form-control" name="id" type="number" placeholder="Masukkann ID Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Description</span>
                                                        <input class="form-control" name="desc" type="text" placeholder="Masukkan Deskripsi Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Company</span>
                                                        <select class="form-control" name="company" required="" >
                                                            <option>PT. BOGASARI</option>
                                                            <option>PT. SAMPOERNA</option>
                                                            <option>PT. INDOFOOD</option>
                                                            <option>PT. WINGSFOOD</option>
                                                            <option>PT. NUTRIFOOD</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Stock</span>
                                                        <input class="form-control" name="stock" type="number" placeholder="Masukkan Jumlah Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Price</span>
                                                        <input class="form-control" name="price" type="text" placeholder="Masukkan Harga Barang" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Images</span>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile"><i class="fa  fa-file-image-o"></i> Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-btn">
                                                                <button type="submit" class="btn btn-outline-light btn-lg orange_color" name="buttonins"> <i class="fa fa-check orange_color"></i> SAVE </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-btn">
                                                                <a type="button" class="btn btn-outline-danger btn-lg" name="buttoncnc"  href="mdpop.php"><i class="fa fa-times" style="color: white;"></i> CANCEL </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                    require_once'../includes/koneksi.php';
                                                    
                                                    
                                                    if(isset($_POST['buttonins'])){
                                                        $id_barang = $_POST['id'];
                                                        $description = $_POST['desc'];
                                                        $company = $_POST['company'];
                                                        $stock = $_POST['stock'];
                                                        $price = $_POST['price'];

                                                        $sql = "INSERT INTO mdpop (id_barang, description, company, stock, price) VALUES ('$id_barang','$description','$company','$stock','$price')";
																			
			                                            if($koneksi->query($sql)===TRUE){
                                                        echo "<script>setTimeout(\"location.href = 'mdpop.php';\",1500);</script>";
			                                            } else {
				                                        echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
			                                            }

                                                        
                                                    }
                                                    ?>
                                                </form>
                                            </div>
                                        </div>
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