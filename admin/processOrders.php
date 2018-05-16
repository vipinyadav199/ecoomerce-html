<?php include_once("header.php"); ?>

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="dashboard-box content">
		                   	<h2><i class="fa fa-tachometer icno"></i> Orders</h2>
		                   
					<div class="col-md-12 dashbordTitle">
						<h3>Process Orders</h3>
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
									<tr class="list11">
										<td>
											<a class="btn btn-success" id="deliverOrder" data-id="11" href="javascript:;" style="margin-bottom:10px;"><i class="fa fa-thumbs-up"></i> Deliver</a>
											<a class="btn btn-danger" data-id="11" href="javascript:;" id="cancelOrder"><i class="fa fa-close"></i> Cancel</a>
										</td>
										<td><a href="http://staging.webyot.com/gems/invoice/55230823865" target="_blank">#55230823865</a></td>
										<td>Asdfasdf </td>
										<td></td>
										<td><span class="label label-danger">Failed</span></td>
										<td>1</td>
										<td>Rs. 3670.00</td>
										<td></td>
										<td class="status11"><span class="label label-info">Processed</span></td>
										<td>03-01-2018</td>
										<td>ONLINE</td>
										<td>de1c46029e2f71535afa</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
<?php include_once("footer.php"); ?> 