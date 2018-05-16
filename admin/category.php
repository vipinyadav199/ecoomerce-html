<?php include("header.php"); ?>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                   <div class="dashboard-box content">
                   	<h2><i class="fa fa-tachometer icno"></i>Categories</h2>
			<div class="col-lg-12 main-content">
				<div class="row">
					<div class="btn-group pull-right">
					<a class="btn btn-warning" href="addNewcategory"><i class="fa fa-plus-circle"></i>  Add New Category</a>
				</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Sr.No</th>
								<th>Name</th>
								<th>Parent Category Name</th>
								<th>Image</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="gc_row row29">
								<td>1</td>
								<td>Audio & Home Entertainment</td>
								<td>NA</td>
								<td>
									<div class="img">
										<img src="http://staging.webyot.com/gems/uploads/images/40487af2e92f7938c11e312472cf2e221473323301.jpg" class="f-img">
									</div>
								</td>
								<td>
									<div class="btn-group pull-right">
										<a class="btn btn-success" href=""><i class="fa fa-pencil"></i> Edit</a>
										<a class="btn btn-danger deleteCategory" href="javascript:;" data-id="29"><i class="fa fa-trash-o"></i> Delete</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div><!--/row-->
			</div>
                    </div>
                 </div>
            </div>
        </div>
<?php include("footer.php"); ?>        