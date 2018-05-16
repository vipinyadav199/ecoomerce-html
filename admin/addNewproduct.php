<?php include("header.php"); ?>
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="dashboard-box content">
				<h2><i class="fa fa-tachometer icno"></i> Store</h2>
	                   
				<div class="col-md-12 dashbordTitle">
				<h3>Add New Product</h3>
				</div>
				<form>
					<div class="add-product">
						<div class="col-md-8 row">
							<ul class="nav nav-tabs">
							    <li class="active"><a data-toggle="tab" href="#home">Details</a></li>
							    <li><a data-toggle="tab" href="#menu1">Overview</a></li>
							    <li><a data-toggle="tab" href="#menu2">Custom Fields</a></li>
							    <li><a data-toggle="tab" href="#menu3">Categories</a></li>
							    <li><a data-toggle="tab" href="#menu4">Images</a></li>
							    <li><a data-toggle="tab" href="#menu5">SEO</a></li>
							</ul>
						
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<div class="form-group">
										<label for="name">Product Name</label>
										<input type="text" class="form-control" name="name" placeholder="Product Name" required="">
									</div>
									<div class="form-group">
					                                         <label for="des">Description</label>
					                                         <textarea name="des" class="form-control summernote"></textarea>
									</div>
									<div class="row">
							            
								             	<div class="col-md-12">
								                   <div class="form-group">
								                        <label for="Quantity">Available Quantity</label>
									                <input type="text" class="form-control" name="quantity" required="">
									           </div>
								                 </div>
							             	</div>
									<div class="row">
										<div class="col-md-12">
										  <div class="col-md-8 featured-img">
										     <div class="form-group">
										        <label for="feature_image">Feature Image</label>
										            <input type="file" name="feature_image" id="feature" data-select="f-img" class="form-control" required=""> 
										      </div>
										   </div> 
										   <div class="col-md-4" style="text-align:center;">
										      <div class="img">
										        <img src="<?= base_url(); ?>assets/admin/img/no.jpg" class="f-img">
										      </div>
										   </div>
										</div> 
									</div>
							         </div>	
								<div id="menu1" class="tab-pane fade">
									<div class="row col-md-12">
										<div class="form-group">
						                                         <textarea name="overview" class="form-control summernote"></textarea>
										</div>
									</div>
								</div>
								<div id="menu2" class="tab-pane fade">
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-primary addMoreField" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add field</button>
										</div>
										<div class="fields" style="margin-bottom:10px;overflow:hidden;width: 100%;">
											<ul class="fieldList">
												<li>
													<div class="removeFields"><i class="fa fa-close"></i></div>
													<div class="col-md-10">
														<label for="value">Value</label>
														<textarea class="form-control" name="value[]" placeholder="For EX - green,red,blue,yello" required=""></textarea><p class="help-block">All value must be in comma (,) separated.</p>
													</div>
												</li>
											</ul>
  										 </div>
									</div>
								</div>
								<div id="menu3" class="tab-pane fade">
									<div class="row">
										<div class="col-md-12">
											<h3>Select one or more categories</h3>
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Sr.No</th>
														<th>Name</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Audio & Home Entertainment</td>
														<td>
															<input type="checkbox" name="categories[]" id="category29" value="29">
														</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Automotive</td>
														<td>
															<input type="checkbox" name="categories[]" id="category38" value="38">
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Baby & Mom</td>
														<td>
															<input type="checkbox" name="categories[]" id="category39" value="39">
														</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Beauty, Health & Grocery</td>
														<td>
															<input type="checkbox" name="categories[]" id="category40" value="40">
														</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Books & Magazines</td>
														<td>
															<input type="checkbox" name="categories[]" id="category41" value="41">
														</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Cameras & Optics</td>
														<td>
															<input type="checkbox" name="categories[]" id="category42" value="42">
														</td>
													</tr>
													<tr>
														<td>7</td>
														<td>Audio & Home Entertainment</td>
														<td>
															<input type="checkbox" name="categories[]" id="category43" value="43">
														</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Automotive</td>
														<td>
															<input type="checkbox" name="categories[]" id="category43" value="43">
														</td>
													</tr>
													<tr>
														<td>9</td>
														<td>Baby & Mom</td>
														<td>
															<input type="checkbox" name="categories[]" id="category43" value="43">
														</td>
													</tr>
													<tr>
														<td>10</td>
														<td>Beauty, Health & Grocery</td>
														<td>
															<input type="checkbox" name="categories[]" id="category43" value="43">
														</td>
													</tr>
													<tr>
														<td>11</td>
														<td>Books & Magazines</td>
														<td>
															<input type="checkbox" name="categories[]" id="category43" value="43">
														</td>
													</tr>
													<tr>
														<td>12</td>
														<td>Cameras & Optics</td>
														<td>
															<input type="checkbox" name="categories[]" id="category43" value="43">
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div id="menu4" class="tab-pane fade">
									<div class="row">
										<div class="col-md-12" style="margin-bottom:20px;">
											<div class="col-md-12">
												<button type="button" class="btn btn-primary addMoreSlide"><i class="fa fa-plus"></i> Add More</button>
											</div>
											<div class="moreSlider">
												<ul class="slides">
												    
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div id="menu5" class="tab-pane fade">
									<div class="col-lg-12 row">
							                	<h3>SEO Information</h3>
							         	</div>
							         	<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="title_tag">Title Tag</label>
												<input type="text" name="title" class="form-control"> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="meta-tag">Meta Tags</label>
												<textarea name="meta" id="" cols="30" rows="10" class="form-control"></textarea> 
											</div>
										</div>
											
									</div>
								</div>
								<div class="col-md-12">
								   <div class="button-box row">
							         <button type="submit" class="btn btn-primary">Product Save</button>
							      	</div>
						        </div>
							</div>
						</div>
					
						<div class="col-md-4" side>
							<div class="form-group">
								<label for="exampleInputEmail1">Status</label>
								<select name="status" class="form-control">
									<option value="1">Enable</option>
									<option value="1">Disable</option>
								</select>
							</div>
								 
							<div class="form-group">
							    <label for="exampleInputEmail1">Weight</label>
							    <input type="text" name="weight" class="form-control" value="0">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Item Size</label>
								<select name="size" class="form-control">
									<option value="">--Select Size--</option>
									<option value="1mm">1mm</option>
									<option value="2mm">2mm</option>
									<option value="3mm">3mm</option>
									<option value="4mm">4mm</option>
									<option value="5mm">5mm</option>
									<option value="6mm">6mm</option>
									<option value="7mm">7mm</option>
									<option value="8mm">8mm</option>
									<option value="9mm">9mm</option>
									<option value="10mm">10mm</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Item Shape</label>
								<select name="shape" class="form-control">
									<option value="">--Select Shape--</option>
									<option value="Faceted">Faceted</option>
									<option value="Cabochon">Cabochon</option>
									<option value="Rose Cut">Rose Cut</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Price</label>
								<input type="text" name="price" class="form-control" required="">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Sale Price</label>
								<input type="text" name="sprice" class="form-control" value="0">
							</div>	
						</div>
					</div>
				</form>
                	</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?> 