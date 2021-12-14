<?php
include 'layout/header.php';
?>

                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                            <div class="page_title">
                                <h2>Commentar Visitor</h2>
                            </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row column1">
                            <div class="col-lg-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Commentar</h2>
                                    </div>
                                </div>
                                <div class="contain">
                                    <div class="section-center">
                                        <div class="container">
                                            <div class="booking-form">
                                                <form method="POST" id="comment_form">
                                                    <div class="form-group">
                                                        <span class="form-label">Name</span>
                                                        <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Your Name...">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Comment</span>
                                                        <textarea name="comment_content" id="comment_content" class="form-control" rows="5" placeholder="Enter Your Comment..."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="comment_id" id="comment_id" value="0">
                                                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                                                        <input type="reset" class="btn btn-danger">
                                                    </div>
                                                </form>
                                                <span id="comment_message"></span>
                                                <br>
                                                <div id="display_comment"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            

                            <!-- end row -->
                        </div>
                        <!-- footer -->
                        <div class="container-fluid">
                            <div class="footer">
                            <p>Copyright © 2021 Designed by UD. SATU 7AN. All rights reserved.<br><br>
                                Distributed By: <a href="#">UD. SATU 7AN</a>
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- end dashboard inner -->
                </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="js/animate.js"></script>
        <!-- select country -->
        <script src="js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.js"></script> 
        <!-- chart js -->
        <script src="js/Chart.min.js"></script>
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="js/perfect-scrollbar.min.js"></script>
        <script>
            var ps = new PerfectScrollbar('#sidebar');
        </script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <!-- calendar file css -->     
        <script src="js/semantic.min.js"></script>
        <!-- Script Komentar -->
        <script>
            $(document).ready(function(){

                $('#comment_form').on('submit', function(event){
                    event.preventDefault();
                    var form_data = $(this).serialize();
                    $.ajax({
                        url:"add_comment.php",
                        method:"POST",
                        data:form_data,
                        dataType:"JSON",
                        success:function(data)
                    {
                        if(data.error != '')
                        {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                        }
                    }
                    })
                });

                load_comment();

                function load_comment()
                {
                    $.ajax({
                    url:"fetch_comment.php",
                    method:"POST",
                    success:function(data)
                    {
                        $('#display_comment').html(data);
                    }
                    })
                }

                $(document).on('click', '.reply', function(){
                    var comment_id = $(this).attr("id");
                    $('#comment_id').val(comment_id);
                    $('#comment_name').focus();
                });
                
            });
        </script>
        
    </body>
</html>
