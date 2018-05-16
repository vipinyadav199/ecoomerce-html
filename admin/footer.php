 

    <!-- /#wrapper -->
 <script src="assets/lib/js/jquery.js"></script>
 <script src="assets/lib/js/bootstrap.min.js"></script>
 <script src="assets/lib/js/bootstrap-datepiker.min.js"></script>
 <script src="assets/lib/js/dataTables.min.js"></script>
 <script src="assets/lib/js/tableTool.js"></script>
 <script src="assets/lib/js/select2.min.js"></script>
 <script src="assets/lib/js/jquery.validate.min.js"></script>
 <script src="assets/lib/js/toastr.js"></script>
 <script src="assets/lib/js/summernote.min.js"></script>
 <script src="assets/admin/js/app.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
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
         <script>
        $(document).ready(function() {
  $('.summernote').summernote();
});

$(".addMoreField").click(function(){
	 
	    var html = "";
	                                                  
		html+='<li><div class="removeFields"><i class="fa fa-close"></i></div>';
		html+='<div class="col-md-10"><label for="label">Field Label</label>';
		html+='<input type="text" class="form-control" name="label[]" required="">';
		html+='</div>';
		html+='<div class="col-md-10">';
		html+='<label for="value">Value</label>';
		html+='<textarea class="form-control" name="value[]" placeholder="For EX - green,red,blue,yello" required=""></textarea>';
		html+='<p class="help-block">All value must be in comma (,) separated.</p>';
		html+='</div>';
		
		html+='</li>';
		
		$(".fieldList").append(html);						       
	
}); 
 
$(".fieldList").on("click",".removeFields",function(){
	$(this).parent().remove();
});



$(".addMoreSlide").click(function(){
var baseUrl = 'http://'+window.location.hostname+'/shopping/';	
       var html = "";
		html+='<li>';
		html+='<div class="col-md-9">';
		html+='<input type="file" name="slide[]" class="form-control chooseSlide">';
		html+='</div>';
		html+='<div class="col-md-3">';
		html+='<div class="slideImg">';
		html+='<img src="'+baseUrl+'assets/admin/img/dummy.jpg">';
		html+='<button type="button" class="btn btn-danger removeSlide"><i class="fa fa-close"></i></button>';
		html+='</div>';
		html+='</div>';
		html+='</li>';
	  
	    $(".slides").append(html);
});
  

$(".slides").on("click",".removeSlide",function(){
	$(this).parent().parent().parent().remove();
});

$(".slides").on("change",".chooseSlide",function(){
	   
        var $this = $(this);
        var select = $this.parent().parent();
        readPic2(this,select);
 });
 
 function readPic2(input,select) {
  
            if (input.files && input.files[0]) {
              
                var reader = new FileReader();

                reader.onload = function(e) {
                     
                    console.log(select);
                    $(select).find("img").attr('src', e.target.result);
                   
                }

                reader.readAsDataURL(input.files[0]);
            }
    }
	 </script>
	 
      </body>
      </html>
