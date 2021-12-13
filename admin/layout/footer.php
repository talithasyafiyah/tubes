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
      <!-- calendar file js -->     
      <script src="js/semantic.min.js"></script>
      <!-- datatables file js -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
      <script>
         $(document).ready(function() 
         {
            $('#dataTable').DataTable();
         });
      </script>
      <!-- Kalendar -->
      <script src="js/moment.js"></script>
      <script>
         document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
               initialView: 'dayGridMonth',
               events: [<?php 
                        $data = mysqli_query($koneksi, "SELECT * FROM kalendar_admin");
                        
                        while ($d = mysqli_fetch_array($data)) {     
                     ?>
                     {  title: '<?php echo $d['kegiatan']; ?>',
                        start: '<?php echo $d['mulai']; ?>',
                        end: '<?php echo $d['selesai']; ?>'    
                     },
                     <?php 
                        } 
                     ?> ],
                     
               selectOverlap: function (event) {
                  return event.rendering === 'background';
               }
            });

            calendar.render();
         });
      </script>
      <!-- Teks Animasi -->
      <script src="js/scriptAnimasi.js"></script>
   </body>
</html>