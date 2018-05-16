<?php include_once("inc/header.php"); ?>
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="dashboard-box content">
					<h2><i class="fa fa-tachometer icno"></i> Store</h2>
	
	
					<div class="col-lg-12 main-content">
						<div class="row">
							<h3>Products</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Name</th>
										<th>Price</th>
										<th>Sale Price</th>
										<th>Available Quantity</th>
										<th>Status</th>
										<th>
											<span class="btn-group pull-right">
												<button type="submit" class="btn btn-warning" href="#"><i class="fa fa-floppy-o"></i> Bulk Save</button>
												<a class="btn btn-primary" href="<?=base_url();?>admin/store/addNew"><i class="fa fa-plus-circle"></i> Add New</a>
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="gc_row list38">
										<td class="col-sm-1">1</td>
										<td class="col-sm-2">Demo product</td>
										<td class="col-sm-1">
											<input type="hidden" name="pid[]" value="38">
											<input type="text" class="col-sm-12 form-control" name="price[]" value="5000" placeholder="Price" required="">
										</td>
										<td class="col-sm-1">
											<input type="text" class="col-sm-12 form-control" name="sprice[]" value="3580" placeholder="Sales price">
											</td>
											<td class="col-sm-2">
											<input type="text" class="col-sm-12 form-control" name="qut[]" value="196" placeholder="Available Quantity" required="">
										</td>
										<td class="col-sm-2">
											<select name="status[]" class="form-control">
											<option value="1" selected="">Enable</option><option value="0">Disable</option>								
											</select>
										</td>
										<td>
											<div class="btn-group pull-right">
												<a class="btn btn-success" href=""><i class="fa fa-pencil"></i> Edit</a>
												<a class="btn btn-danger deleteProduct" href="javascript:;" data-id=""><i class="fa fa-trash-o"></i> Delete</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once("inc/footer.php"); ?> 