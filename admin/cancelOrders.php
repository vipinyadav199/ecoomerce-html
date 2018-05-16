<?php include("header.php"); ?>

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="dashboard-box content">
					<h2><i class="fa fa-tachometer icno"></i> Orders</h2>
					<div class="col-md-12 dashbordTitle">
						<h3>Cancel Orders</h3>
					</div>
					<div class="row main-content">
						<div class="col-md-12">
							<table class="table table-bordered">
								<thead>
									<tr class="table-head">
										<th>Action</th>
										<th>Order Id</th>
										<th>Customer</th>
										<th>Mobile</th>
										<th>Pay Status</th>
										<th>Total Products</th>
										<th>Amt</th>
										<th>Remark</th>
										<th>Order Status</th>
										<th>Date</th>
										<th>Payemnt Mode</th>
										<th>Transaction ID</th>
									</tr>
								</thead>
								<tbody>
									<tr class="list1">
										<td>
											<a class="btn btn-success" data-id="1" id="processOrder" href="javascript:;" style="margin-bottom:10px;"><i class="fa fa-spinner"></i> Process</a>
											<a class="btn btn-danger" data-id="1" id="deleteOrder" href="javascript:;"><i class="fa fa-trash"></i> Delete</a>
										</td>
										<td><a href="http://staging.webyot.com/gems/invoice/51240122261" target="_blank">#51240122261</a></td>
										<td>Abhay Singh Solanki</td>
										<td>9694202611</td>
										<td><span class="label label-danger">Failed</span></td>
										<td>3</td>
										<td>Rs. 11506.00</td>
										<td></td>
										<td class="status1">
										<span class="pending">Cancelled</span>
										</td>
										<td>21-09-2016</td>
										<td>ONLINE</td>
										<td>873feaf4a9e81b3f4ba4</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include("footer.php"); ?> 