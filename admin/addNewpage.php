<?php include("header.php"); ?>

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="dashboard-box content">
					<h2><i class="fa fa-tachometer icno"></i> Add New page</h2>
				
					<div class="row main-content">
						<div class="col-md-12">
							<form>
								<div class="add-product">
									<div class="col-md-12 row">
										<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">Content</a></li>
										<li><a data-toggle="tab" href="#menu1">Atributes</a></li>
										<li><a data-toggle="tab" href="#menu2">SEO</a></li>
										</ul>
							
										<div class="tab-content">
											<div id="home" class="tab-pane fade in active">
												<div class="form-group">
												<label for="name">Title</label>
												<input type="text" class="form-control" name="name" placeholder="" required="">
												</div>
												<div class="form-group">
												<label for="des">Content</label>
												<textarea name="des" class="form-control summernote"></textarea>
												</div>
											</div>	
											<div id="menu1" class="tab-pane fade">
												<div class="col-md-8">
													<div class="form-group">
														<label for="menu-title" class=" control-label">Menu Title</label>
														<div class="">
															<input type="text" class="form-control" name="menu_title" id="menu_title">
														</div>
													</div>
													
													<div class="form-group">
														<label for="add_menu" class="control-label">Add To Menu</label>
														<input type="checkbox" name="add_menu" id="add_menu" value="1" class="form-control">
													</div>
													
													<div class="form-group">
														<label for="sequence" class="  control-label">Sequence</label>
														<input type="text" name="sequence" id="sequence" class="form-control">
													</div>
												</div>
											</div>
											<div id="menu2" class="tab-pane fade">
												<div class="col-md-8">
													<div class="form-group">
														<label for="seotitle">SEO Title</label>
														<input type="text" class="form-control" name="seo-title" id="seo-title">
													</div>
												
													<div class="form-group">
														<label for="meta">Meta Data</label>
														<textarea class="form-control" name="meta" id="meta"></textarea>
													<div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="button-box row">
													<button type="submit" class="btn btn-primary">Save</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include("footer.php"); ?> 