<?php include_once("header.php"); ?>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                   <div class="dashboard-box content">
                   <h2><i class="fa fa-tachometer icno"></i> Welcome To Dashboard</h2>
                   
                    <div class="col-md-12 dashbordTitle">
                      <h3>Today Orders Analitics</h3>
                    </div>

                    <div class="col-lg-12" style="padding: 0px;">
                      <div class="col-lg-3">
                             <div class="small-box">
                                 <p class="box-title">Pending Orders</p>
                                 <p class="total-number">0</p>
                                 <a href="admin/pendingOrder" class="small-box-footer">View Pending Orders</a>
                             </div>
                      </div>
                      <div class="col-lg-3">
                             <div class="small-box">
                                 <p class="box-title">Completed Orders</p>
                                 <p class="total-number">0</p>
                                 <a href="admin/deliveredOrder" class="small-box-footer">View Completed Orders</a>
                             </div>
                      </div>
                      <div class="col-lg-3">
                             <div class="small-box">
                                 <p class="box-title">Cancelled Orders</p>
                                 <p class="total-number">0</p>
                                 <a href="admin/products" class="small-box-footer">View Cancelled Orders</a>
                             </div>
                      </div>
                      <div class="col-lg-3">
                             <div class="small-box">
                                 <p class="box-title">Total Orders</p>
                                 <p class="total-number">0</p>
                                 <a href="admin/customer" class="small-box-footer">View total Orders</a>
                             </div>
                      </div>
                   </div>
                </div>
                
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
<?php include("footer.php"); ?>