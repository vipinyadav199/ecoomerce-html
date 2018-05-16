<?php include("header.php"); ?>

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="dashboard-box content">
					<h2><i class="fa fa-tachometer icno"></i> Customers</h2>
				
					<div class="col-md-12 main-content">
						<div class="row">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Name</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Address</th>
										<th>City</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr class="gc_row row1">
										<td>1</td>
										<td>Ashok</td>
										<td>rawan.ashok007@gmail.com</td>
										<td></td>
										<td>jaipur</td>
										<td>jaipur</td>
										<td>
											<div class="btn-group pull-right">
												<a class="btn btn-success" href=""><i class="fa fa-pencil"></i> Edit</a>
												<a class="btn btn-danger deleteCustomer" href="javascript:;" data-id="1"><i class="fa fa-trash-o"></i> Delete</a>
											</div>
										</td>
									</tr>
									<tr class="gc_row row2">
										<td>2</td>
										<td>Asdfasdf</td>
										<td>abhaydeep31391@gmail.com</td>
										<td></td>
										<td>sadfgsaf</td>
										<td>Jaipur</td>
										<td>
											<div class="btn-group pull-right">
												<a class="btn btn-success" href=""><i class="fa fa-pencil"></i> Edit</a>
												<a class="btn btn-danger deleteCustomer" href="javascript:;" data-id="2"><i class="fa fa-trash-o"></i> Delete</a>
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