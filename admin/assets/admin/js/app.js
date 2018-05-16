$(function(){
	
	var baseUrl = 'http://'+window.location.hostname+'/task/';	
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
  // menu

  $('.datepicker').datepicker({
     format: 'dd/mm/yyyy',
     startDate: '+1d',
     todayHighlight: true,
     autoclose: true,
   });
  
  $('.datepicker1').datepicker({
     format: 'dd/mm/yyyy',
     todayHighlight: true,
     autoclose: true,
   });

   $('.datepicker2').datepicker({
     format: 'dd/mm/yyyy',
     todayHighlight: true,
     autoclose: true,
   });

		$(".alldata").DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
            {
                extend: 'copy',
                title: 'All Viewers',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5]
                }
            },
            {
                extend: 'excel',
                title: 'All Viewers',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5]
                }
            },
            {
                extend: 'pdf',
                title: 'All Viewers',
                exportOptions: {
                     columns: [ 0, 1, 2, 3, 4, 5]
                }
            },
            
            
        ]
    } );
  // editor1


  $(".mainmenu").click(function(){
  	var a = $(this).attr("class");
    
  	if(a != "mainmenu active"){
  		$(".mainmenu span").removeClass("fa-caret-down");
  		$(".mainmenu span").addClass("fa-caret-right");
  		$(this).find("span").removeClass("fa-caret-right");
  		$(this).find("span").addClass("fa-caret-down");
  		$(".mainmenu").find("ul").slideUp();
  	    $(".mainmenu").removeClass("active");
  		$(this).find("ul").slideDown();
  	    $(this).addClass("active");
  	}
  	if(a == "mainmenu active"){
  		
  	    $(this).find("span").addClass("fa-caret-right");
  		$(this).find("span").removeClass("fa-caret-down");
  		$(this).find("ul").slideToggle();
  	    $(this).removeClass("active");
  
  	}
  	
  });
  
  
  $('.adminLogin input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.adminLogin').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
   // change password

$(".select2").select2();

$(".tags").select2({
  
   placeholder: 'Select an option',
   createSearchChoice: false,

})


$("#adminPassChange").submit(function(e){
	
	var pass = $("#pass").val();
	var cpass = $("#cpass").val();
	
	$(".passBtn").text("Change Password...");
	var url = $(this).attr("action");
	if(pass == "" && cpass == ""){
		$(".passBtn").text("Change Password");
		toastr['error']("All fields are required.");
	}else{
		$.post(url,{"pass":pass,"cpass":cpass},function(o){
		  if(o.result === 1){
		  	 $("#pass").val("");
		  	 $("#cpass").val("");
		  	 $(".passBtn").text("Change Password");
		  	 toastr['success']("Password has been changed successfully");
		  }else{
		  	 $(".passBtn").text("Change Password");
		  	 
		  }	
		},"json");
	}
	
	e.preventDefault();
});
   

// profile update

$("#updateProfile").submit(function(e){
	
	$(".profileBtn").text("Update Profile...");
	var url = $(this).attr("action");
	
	var data = $(this).serialize();
	
		$.post(url,data,function(o){
		  if(o.result === 1){
		  	 $("#pass").val("");
		  	 $("#cpass").val("");
		  	 $(".profileBtn").text("Update Profile");
		  	 toastr['success']("Profile updated successfully");
		  }else{
		  	 $(".profileBtn").text("Update Profile");
		  	 toastr['error'](o.result);
		  }	
		},"json");

	
	e.preventDefault();
});


// add IP to white list

$(".wlist").click(function(e){
    var url = baseUrl+"admin/dashboard/whitelistip";
	
	$(this).text("Add IP...");
	
	var ip = $("#ip").val();
	if(ip == undefined){
		$(this).text("Add IP");
		toastr['error']("Enter ip to white list");
	}else{
		
		$.post(url,{"ip":ip},function(o){
			
			if(o.result === 1){
				$("#ip").val("");
				$(".ipList").append('<span class="wIp" id="removeIp'+o.id+'">'+o.ip+'<span class="removeIp" data-id="'+o.id+'"><i class="fa fa-close"></i></span></span>');
				$(".wlist").text("Add IP");
				toastr['success']("IP : "+o.ip+" has been white listed succefully");
			}else{
				$(".wlist").text("Add IP");
			    toastr['error'](o.result);	
			}
			
		},"json");
	}
	e.preventDefault();
});

// Shipping Charge update


// remove ip from white list

$(".ipList").on("click",".removeIp",function(e){
	
	var url = baseUrl+"admin/dashboard/removeip";
	var id = $(this).data("id");
	if(id == ""){
		
	  toastr['error']("Invalid action try again.");	
	  
	}else{
		
		$.post(url,{"id":id},function(o){
			
			if(o.result === 1){
			    $("#removeIp"+o.id).remove();
				toastr['success']("IP : "+o.ip+" has been removed succefully");
			}else{
				
			
			    toastr['error'](o.result);	
			}
			
		},"json");
		
	}
	
 e.preventDefault();	
}); 


$("#feature").change(function(){
	    var select = $(this).data("select");
	 
        readPic(this,select);
 });
 
$(".feature").change(function(){
	    var select = $(this).data("select");
	 
        readPic(this,select);
 }); 
  
  function readPic(input,select) {
  
    if (input.files && input.files[0]) {
      
        var reader = new FileReader();

        reader.onload = function(e) {
           
            $("."+select).attr('src', e.target.result);
           
        }

        reader.readAsDataURL(input.files[0]);
    }
  } 
   

 
$(".fieldList").on("click",".removeFields",function(){
	$(this).parent().remove();
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


$("table").on("click","#deactiveEmployee",function(){
    
      var url = baseUrl+"admin/deactiveEmployee";
      var flag = confirm("Are you sure you wanna deactive this employee ?");

      if(flag == true){

          var id = $(this).data("id");
          var $this = $(this);
          $.post(url,{'id':id},function(o){
          	
          	
            if(o.result === 1){

              toastr['success']('Employee  has been deactivated successfully.');	
              $('.row'+id).find('.status').html('<span class="label label-danger">Deactive</span>');
              $this.attr("id","activeEmployee").text('Active');;
            }else{
              toastr['error'](o.result);
            }
         },"json");
      }
   });
 
  $("table").on("click","#activeEmployee",function(){
    
      var url = baseUrl+"admin/activeEmployee";
      var flag = confirm("Are you sure you wanna active this employee ?");

      if(flag == true){

          var id = $(this).data("id");
          var $this = $(this);
          $.post(url,{'id':id},function(o){
          	
          	
            if(o.result === 1){

              toastr['success']('Employee has been Activated successfully.');	
              $('.row'+id).find('.status').html('<span class="label label-success">Active</span>');
              $this.attr("id","deactiveEmployee").text('Deactive');
             
            }else{
              toastr['error'](o.result);
            }
         },"json");
      }
   });

   $("table").on("click",".deleteEmployee",function(){
    
      var url = baseUrl+"admin/deleteEmployee";
      var flag = confirm("Are you sure you wanna delete this employee ?");

      if(flag == true){

          var id = $(this).data("id");
          $.post(url,{'id':id},function(o){
          	
          	
            if(o.result === 1){
              toastr['success']('Employee has been deleted successfully.');	
              $(".row"+id).remove();
             
            }else{
              toastr['error'](o.result);
            }
         },"json");
      }
   });

   $(".editDept").click(function(){

       var did = $(this).attr('data-id');
       var dept = $(this).parent().parent().parent().find('.deptname').attr("data-name"); 
      
       $(".ename").val(dept);
       $(".edid").val(did);
       
       $('#myModal1').modal('show');      

   });
	
 $("table").on("click",".deleteClient",function(){
    
      var url = baseUrl+"admin/deleteClient";
      var flag = confirm("Are you sure you wanna delete this client ?");

      if(flag == true){

          var id = $(this).data("id");
          var type = $(this).data("type");

          $.post(url,{'id':id,'type':type},function(o){
            
            if(o.result === 1){
              toastr['success']('Client has been deleted successfully.'); 
              $(".row"+id).remove();
             
            }else{
              toastr['error'](o.result);
            }

         },"json");
      }
   });

 $("table").on("click",".deleteDept",function(){
    
      var url = baseUrl+"admin/deleteCompliance";
      var flag = confirm("Are you sure you wanna delete this Compliance ?");

      if(flag == true){

          var id = $(this).data("id");
          $.post(url,{'id':id},function(o){
            
            
            if(o.result === 1){

              toastr['success']('Compliance has been deleted successfully.'); 
              $(".row"+id).remove();
             
            }else{
              toastr['error'](o.result);
            }

         },"json");
      }
   });

 $("table").on("click",".deleteType",function(){
     console.log(1);
      var url = baseUrl+"admin/deleteType";
      var flag = confirm("Are you sure you wanna delete this type ?");

      if(flag == true){

          var id = $(this).data("id");
          $.post(url,{'id':id},function(o){
            
            
            if(o.result === 1){
              toastr['success']('Type has been deleted successfully.'); 
              $(".row"+id).remove();
             
            }else{
              toastr['error'](o.result);
            }

         },"json");
      }
   });


 // $("#income").change(function(){

 //    var value = $(this).val();
 //    console.log(value); 
 //    if(value != "" && value != undefined) {

 //       $(".dnone").css("display","none");
 //       $("."+value).css("display","block");      
       
 //    } else {

 //       $(".dnone").css("display","none");
 //       $(".dnone").find("input").val('');
 //       $(".dnone").find("textarea").val('');
 //    }

 // });






$(".services").on("click",".addmore",function(){
    var html = "";
    html = $(".dynamic").html();
    $(".services").append(html);

     $('.datepicker').datepicker({
       format: 'dd/mm/yyyy',
       startDate: '+1d',
       todayHighlight: true,
       autoclose: true,
     });
});  

$(".services").on("click",".remove",function(){
    
    var box = $(this).parent().parent().remove();
    box.remove();
});

$(".addFields").click(function(){

  var html = "";
  html +='<div class="fieldrow">';
  html +='<div class="col-md-6">';
  html +='<div class="form-group">';
  html +='<label for="name">Field Name <span class="required">*</span></label>';
  html +='<input type="text" class="form-control" name="fieldname[]" placeholder="Enter Field Name " required>';
  html +='</div>';
  html +='</div>';
  html +='<div class="col-md-5">';
  html +='<div class="form-group">';
  html +='<label for="name">Field Value<span class="required">*</span></label>';
  html +='<input type="text" class="form-control" name="fieldval[]" id="fieldval" placeholder="Field Value" required>';
  html +='</div>';
  html +='</div>';
  html +='<div class="col-md-1">';
  html +='<i class="fa fa-close removeItem remove"></i>';
  html +='</div>';
  html +='</div>';
  $(".dynamicfields").append(html);

});

$(".addMoreFields").click(function(){

  var html = "";
      html +='<div class="fieldrow row"><div class="col-md-12">';
      html +='<div class="col-md-6">';
      html +='<div class="form-group">';
      html +='<label for="name">Field Name <span class="required">*</span></label>';
      html +='<input type="text" class="form-control" name="fieldname[]" placeholder="Enter Field Name " required>';
      html +='</div>';
      html +='</div>';
      html +='<div class="col-md-1">';
      html +='<i class="fa fa-close removeItem remove"></i>';
      html +='</div>';
      html +='</div></div>';
  $(".dynamicfields").append(html);

});


$(".dynamicfields").on("click",".remove",function(){
    
    var box = $(this).parent().parent().remove();
    box.remove();
}); 

$(".continueService").click(function(){

       var sid = $(this).attr('data-id');
       
       $(".sid").val(sid);
       

       $('#myModal1').modal('show');      

   });

   $("table").on("click",".cancelService",function() {
    
      var url = baseUrl+"admin/cancleService";
      var flag = confirm("Are you sure you wanna cancle this  service ?");

      if(flag == true){

          var id = $(this).data("id");
          $.post(url,{'id':id},function(o){
            
            
            if(o.result === 1){
              toastr['success']('This recurring service has been cancelled.'); 
              $(".row"+id).remove();
             
            }else{
              toastr['error'](o.result);
            }

         },"json");
      }
   });

   $("table").on("click",".deleteService",function(){
    
      var url = baseUrl+"admin/deleteService";
      var flag = confirm("Are you sure you wanna delete this service ?");

      if(flag == true){

          var id = $(this).data("id");
          $.post(url,{'id':id},function(o){
            
            
            if(o.result === 1){
              toastr['success']('Service has been deleted.'); 
              $(".row"+id).remove();
             
            }else{
              toastr['error'](o.result);
            }
         },"json");
      }
   });

  $("table").on("click",".deleteTask",function(){
    
      var url = baseUrl+"admin/deleteTask";
      var flag = confirm("Are you sure you wanna delete this task ?");

      if(flag == true){

          var id = $(this).data("id");
          $.post(url,{'id':id},function(o){
            
            
            if(o.result === 1){
              toastr['success']('Task has been deleted.'); 
              $(".row"+id).remove();
             
            }else{
              toastr['error'](o.result);
            }
         },"json");
      }
   });

 $(".clienttype").change(function(){
  
      var val = $(this).val();

      if(val == "" || val == undefined) {

         toastr['success']('Select client type'); 
         return true;

      } else {
         
           var url = baseUrl+"admin/getClientTypeFields";
           
           $.post(url,{'type':val},function(o){
            
            
              if(o.result === 1){
  
                 $(".clientTypeFields").html(o.fields);
               
              }else if(o.result === 2){
                  $(".clientTypeFields").html('');
              }else{

                  toastr['error'](o.result);
              }

           },"json");

      }

 });

 $(".chatBox").animate({scrollTop:$("ul").height()},"slow");


});//main function


