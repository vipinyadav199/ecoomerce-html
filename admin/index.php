<?php
 include("header1.php");
?>
        <!-- Top content -->
        <div class="login-page">
              <h3>Admin login</h3>
              <div class="form">
                <form role="form" action="" method="post" class="adminLogin">
                  <input type="text" name="username" placeholder="username"/>
                  <input type="password" name="pass" placeholder="password"/>
                  <input type="hidden" name="token" value=""> 
                  <button>login</button>
                </form>
              </div>
            </div>
         <script src="assets/admin/lib/js/jquery.js"></script>
		 <script src="assets/admin/lib/js/bootstrap.min.js"></script>
		 <script src="assets/admin/lib/js/dataTables.min.js"></script>
		 <script src="assets/admin/lib/js/jquery.validate.min.js"></script>
		 <script src="assets/admin/lib/js/toastr.js"></script>
        <script>
            toastr.options = {
        		  "closeButton": true,
        		  "debug": false,
        		  "newestOnTop": false,
        		  "progressBar": true,
        		  "positionClass": "toast-bottom-right",
        		  "preventDuplicates": false,
        		  "onclick": null,
        		  "showDuration": "300",
        		  "hideDuration": "1000",
        		  "timeOut": "3000",
        		  "extendedTimeOut": "1000",
        		  "showEasing": "swing",
        		  "hideEasing": "linear",
        		  "showMethod": "fadeIn",
        		  "hideMethod": "fadeOut"
		}
        </script>
	
      </body>
      </html>

