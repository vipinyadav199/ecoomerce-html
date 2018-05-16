<?php include("header.php"); ?>

        
	
	<div class="panel-body">
          <div class="row">
               <div class="col-lg-12 contant">
                   
                    
                      <div class="row">
                      <!-- admin profile-->
                      <div class="col-md-6">
                          <div class="box">
                              <p class="boxTitle"> Admin Profile</p>
                                <div class="boxBody">
                                   <form id="updateProfile" method="post" action="admin/dashboard/updateprofile">
                                      <div class="col-md-12">
                                         <div class="form-group">
								            <label for="fullname">Full Name</label>
								            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" value="" required>
								        </div>
                                      </div>
                                      <div class="col-md-12">
                                         <div class="form-group">
								            <label for="email">Email</label>
								            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="" required>
								        </div>
                                      </div>
                                      <div class="col-md-12">
                                         <div class="form-group">
								            <label for="mob">Mobile</label>
								            <input type="text" class="form-control" id="mobile" name="mob" placeholder="Enter Mobile" value="" required>
								        </div>
                                      </div>
                                      <div class="col-md-12">
			                              <button type="submit" class="btn btn-warning profileBtn">Update Profile</button>
	                                  </div>
                                   </form>
                                </div>   
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="box">
                              <p class="boxTitle"> Change Password</p>
                                <div class="boxBody">
                                   <form id="adminPassChange" method="post" action="admin/dashboard/changepassword">
                                      <div class="col-md-12">
                                         <div class="form-group">
                            <label for="pass">New Password</label>
                            
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter New Password" required>
                        </div>
                                      </div>
                                      <div class="col-md-12">
                                         <div class="form-group">
                            <label for="cpass">Confirm password</label>
                            <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Enter Confirm Password" required>
                        </div>
                                      </div>
                                      
                                      <div class="col-md-12">
                                    <button type="submit" class="btn btn-warning passBtn">Change Password</button>
                                    </div>
                                   </form>
                                </div>   
                          </div>
                      </div>
                      </div>
                      <div class="row">
                      <!--change password-->
                      <!---/change password-->
                      </div>
                      <div class="row">
                      <!--whitelip ip-->
                      <div class="col-md-6">
                          <div class="box">
                             <p class="boxTitle">IP White List</p>
                             <div class="boxBody">
	                                <div class="col-md-12">
									    
										   <div class="form-group">
										      <label for="ip">IP To Address For white List</label>
											  <input type="text" name="ip" id="ip" class="form-control" placeholder="Enter IP Address">
											 
											</div>
								     </div>
								     <div class="col-md-12" style="margin-bottom:15px;">
			                              <button type="button" class="btn btn-warning wlist">Add IP</button>
	                                 </div>
	                                 <div class="clear"></div>
								     <p class="listIp">
								        <strong style="padding-left:16px;">White listed IP :</strong><br/>
								        <div class="ipList">
									        
								        </div>
								     </p>
								     
	                              </div>
                             </div> 
                         </div>
                         <!--/whitelip ip-->
                         
                         
                      </div>
                         
                </div>         

<?php include("footer.php"); ?>