<?php include("header.php"); ?>

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="dashboard-box content">
					<h2><i class="fa fa-tachometer icno"></i> Pages</h2>
					<div class="col-lg-12 main-content">
						<div class="row">
							<div class="btn-group pull-right">
							<a class="btn btn-warning" href="admin/page/addNewpage"><i class="fa fa-plus-circle"></i>  Add New Page</a>
							</div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Title</th>
										<th>Sequence</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr class="">
										<td>Terms &amp; Conditions</td>
										<td>0</td>
										<td>
										<div class="btn-group pull-right">
										<a class="btn btn-primary" href="http://staging.webyot.com/gems/admin/editPage/10"><i class="fa fa-pencil"></i> Edit</a>
										<a class="btn btn-danger deletePage" href="javascript:;" data-id="10"><i class="fa fa-trash-o"></i> Delete</a>
										</div>
										</td>
									</tr>
									<tr class="">
										<td>Policy</td>
										<td>0</td>
										<td>
											<div class="btn-group pull-right">
												<a class="btn btn-primary" href="http://staging.webyot.com/gems/admin/editPage/11"><i class="fa fa-pencil"></i> Edit</a>
												<a class="btn btn-danger deletePage" href="javascript:;" data-id="11"><i class="fa fa-trash-o"></i> Delete</a>
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