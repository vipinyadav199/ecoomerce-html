<?php include("header.php"); ?>

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="dashboard-box content">
					<h2><i class="fa fa-tachometer icno"></i> Location</h2>
					<div class="row main-content">
						<div class="col-md-12">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">State</a></li>
								<li><a data-toggle="tab" href="#menu1">City</a></li>
								<li><a data-toggle="tab" href="#menu2">Area</a></li>
							</ul>
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<button type="button" class="addState btn btn-primary fa fa-plus" id="addState" data-toggle="modal" data-target="#myModal"> Add New State</button>
									<h3>States</h3>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Sr.No</th>
												<th>States</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Andhra Pradesh</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Bihar</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Gujarat</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Himachal Pradesh</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Jharkhand</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Kerala</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Maharashtra</td>
											</tr>
											<tr>
												<td>8</td>
												<td>Punjab</td>
											</tr>
											<tr>
												<td>9</td>
												<td>Rajasthan</td>
											</tr>
											<tr>
												<td>10</td>
												<td>Sikkim</td>
											</tr>
										</tbody>
									</table>
								</div>	
								<div id="menu1" class="tab-pane fade">
									<button type="button" class="addCity btn btn-success fa fa-plus" id="addState" data-toggle="modal" data-target="#myModal1"> Add New City</button>
									<h3>States</h3>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Sr.No</th>
												<th>Cities</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Ajmer</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Agra</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Ahmdabad</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Alwar</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Surat</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Mumbai</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Delhi</td>
											</tr>
											<tr>
												<td>8</td>
												<td>Kanpur</td>
											</tr>
											<tr>
												<td>9</td>
												<td>Nagpur</td>
											</tr>
											<tr>
												<td>10</td>
												<td>Patna</td>
											</tr>
										</tbody>
									</table>
									
								</div>
								<div id="menu2" class="tab-pane fade">
									<button type="button" class="addArea btn btn-info fa fa-plus" id="addArea" data-toggle="modal" data-target="#myModal3"> Add New Area</button>
									<h3>Areas</h3>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Sr.No</th>
												<th>State</th>
												<th>City</th>
												<th>Area Name</th>
												<th>Pin Code</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Rajasthan</td>
												<td>Jaipur</td>
												<td>Triveni</td>
												<td>111111</td>
											</tr>
											<tr>
												<td>2</td>
												<td>wwwe</td>
												<td>dsfdfgdg</td>
												<td>ddgg</td>
												<td>22222</td>
											</tr>
											<tr>
												<td>3</td>
												<td>ggfbh</td>
												<td>ghgg</td>
												<td>fgfgfg</td>
												<td>232323</td>
											</tr>
											<tr>
												<td>4</td>
												<td>bjhfjhj</td>
												<td>hjhgj</td>
												<td>vfklvjfk</td>
												<td>656565</td>
											</tr>
											<tr>
												<td>5</td>
												<td>gbgb</td>
												<td>gghbghg</td>
												<td>kkkkh</td>
												<td>565656</td>
											</tr>
											<tr>
												<td>6</td>
												<td>gghghj</td>
												<td>ofgjklk</td>
												<td>jgkfjgk</td>
												<td>55555</td>
											</tr>
											<tr>
												<td>7</td>
												<td>jghjhjg</td>
												<td>nnfn</td>
												<td>Tnfng</td>
												<td>66666</td>
											</tr>
											<tr>
												<td>8</td>
												<td>ggg</td>
												<td>Jaigfgfgpur</td>
												<td>Trgggiveni</td>
												<td>45566</td>
											</tr>
											<tr>
												<td>9</td>
												<td>hgngng</td>
												<td>gfhgfh</td>
												<td>hfhh</td>
												<td>88888</td>
											</tr>
											<tr>
												<td>10</td>
												<td>gfgfgfg</td>
												<td>gggg</td>
												<td>ggggg</td>
												<td>555554</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-12 form-group">
							<label for="name">State Name</label>
							<input type="text" class="form-control" name="state" placeholder="State Name" required="">
						</div>
						<button type="submit" class="btn btn-primary">ADD</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		
		</div>
	</div>
	
	<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-12 form-group">
							<label for="name">City Name</label>
							<input type="text" class="form-control" name="city" placeholder="City Name" required="">
						</div>
						<button type="submit" class="btn btn-primary">ADD</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		
		</div>
	</div>
	
	<div class="modal fade" id="myModal3" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-12 form-group">
							<label for="state">State</label>
							<select>
								<option>Rajasthan</option>
							</select>
							<label for="city">City</label>
							<select>
								<option>Jaipur</option>
							</select><br/>
							<label for="area">Area</label>
							<input type="text" class="form-control" name="area" placeholder="Area Name" required="">
							<label for="area">Pin Code</label>
							<input type="text" class="form-control" name="pin" placeholder="Pin Code" required="">
						</div>
						<button type="submit" class="btn btn-primary">ADD</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		
		</div>
	</div>

<?php include("footer.php"); ?> 