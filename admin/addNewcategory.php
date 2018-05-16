<?php include("header.php"); ?>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                   <div class="dashboard-box content">
                   	<h2><i class="fa fa-tachometer icno"></i> Add New Category</h2>
			<div class="col-lg-12 main-content">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="box1 ">
							<form method="post" action="http://staging.webyot.com/gems/admin/addCategory" enctype="multipart/form-data">
								<div class="form-group">
									<label for="name">Select Parent Category</label>
									<select name="pcat" id="pcat" class="form-control">
										<option value="Audio & Home Entertainment">Audio & Home Entertainment</option>
										<option value="Automotive">Automotive</option>
										<option value="Baby & Mom">Baby & Mom</option>
										<option value="Beauty, Health & Grocery">Beauty, Health & Grocery</option>
										<option value="Books & Magazines">Books & Magazines</option>
										<option value="Cameras & Optics">Cameras & Optics</option>
										<option value="Audio & Home Entertainment">Audio & Home Entertainment</option>
										<option value="Baby & Mom">Baby & Mom</option>
										<option value="Beauty, Health & Grocery">Beauty, Health & Grocery</option>
										<option value="Books & Magazines">Books & Magazines</option>
										<option value="Cameras & Optics">Cameras & Optics</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Category Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label for="feature_image">Feature Image</label>
											<input type="file" name="feature_image" id="feature" data-select="f-img" class="form-control"> 
										</div>
									</div> 
									<div class="col-md-4" style="text-align:center;">
										<div class="img">
											<img src="http://staging.webyot.com/gems/assets/admin/img/no.jpg" class="f-img">
										</div>
									</div>
								</div> 
								<div class="form-group">
									<label for="name">SEO Title</label>
									<input type="text" class="form-control" name="seo" id="seo" placeholder="Enter seo Title">
								</div>
								<div class="form-group">
									<label for="meta">Meta Data</label>
									<textarea class="form-control" name="meta" id="meta"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-md-1"></div> 
				</div>
			</div>
                    </div>
                 </div>
            </div>
        </div>
<?php include_once("footer.php"); ?> 