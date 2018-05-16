<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome To Task Management System</title>
    
    <link href="assets/lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/lib/css/bootstrap-datepiker.min.css" rel="stylesheet">
    <link href="assets/lib/css/font-awesome.min.css" rel="stylesheet">
     <link href="assets/lib/css/dataTables.min.css" rel="stylesheet">
     <link href="assets/lib/css/tableTool.css" rel="stylesheet">
     <link href="assets/lib/css/select2.min.css" rel="stylesheet">
     <link href="assets/lib/css/summernote.css" rel="stylesheet">
    <link href="assets/lib/css/toastr.min.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">

        <!-- Sidebar -->
         <div id="sidebar-wrapper" class="hidden-print">
            <div class="brand-logo">
                    <a href="dashboard.php" class="logos">
                       Online Store
                    </a>
                </div>
            <ul class="sidebar-nav">
            
                <li>
                    <a href="dashboard.php" class="sidebarLi"><i class="fa fa-tachometer sidebarIcon"></i>Dashboard</a>
                    
                </li>
                <li class="mainmenu">
                     <a href="javascript:;" class="sidebarLi"><i class="fa fa-user sidebarIcon"></i>Categories<span class="fa fa-caret-right subMenuIcon"></span></a>
                    <ul class="subMenu">
                    <li>
                         
                            <a href="addNewcategory.php">Add New</a>
                    
                         </li>
                         <li>
                         
                           <a href="category.php">Show all</a>
                    
                         </li>
                    </ul>
                </li>
            
               <li class="seperater"></li> 
                <li class="mainmenu">
                     <a href="javascript:;" class="sidebarLi"><i class="fa fa-user sidebarIcon"></i>Orders<span class="fa fa-caret-right subMenuIcon"></span></a>
                    <ul class="subMenu">
                    <li>
                            <a href="allOrders.php">All</a>
                         </li>
                         <li>
                         
                            <a href="completedOrders.php">Completed Orders</a>
                    
                         </li>
                          <li>
                         
                            <a href="pendingOrders.php">Pending Orders</a>
                    
                         </li>
                         <li>
                         
                            <a href="processOrders.php">Processed Orders</a>
                    
                         </li>
                         <li>
                         
                            <a href="cancelOrders.php">Cancel Orders</a>
                    
                         </li>
                    </ul>
                </li>
               
                <li class="seperater"></li>          
                <li class="mainmenu">
                     <a href="javascript:;" class="sidebarLi"><i class="fa fa-user sidebarIcon"></i>Store<span class="fa fa-caret-right subMenuIcon"></span></a>
                    <ul class="subMenu">
                         <li>
                            <a href="addNewproduct.php">Add new</a>
                         </li>
                         <li>
                            <a href="showAll.php">Show all</a>
                         </li>
                    </ul>
                </li>
                <li class="seperater"></li>
                <li>
                    <a href="page.php" class="sidebarLi"><i class="fa fa-user sidebarIcon"></i>Pages</a>
                    
                </li> 
                <li>
                    <a href="dealToday.php" class="sidebarLi"><i class="fa fa-user sidebarIcon"></i>Deal of the day</a>
                    
                </li> 
                 <li>
                    <a href="customers.php" class="sidebarLi"><i class="fa fa-user sidebarIcon"></i>Customers</a>
                    
                </li> 
                <li>
                    <a href="location.php" class="sidebarLi"><i class="fa fa-user sidebarIcon"></i>Location</a>
                    
                </li>
                
            </ul>
        </div
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <nav class="hidden-print">
            <div class="container-fluid"> 
                 <a href="#menu-toggle"  id="menu-toggle"><i class="fa fa-bars"></i></a>
                 <ul class="notify pull-right">
                     <li><a href="settings.php"><i class="fa fa-cogs"></i></a></li>
                     <li><a href="logout.php"><i class="fa fa-sign-out"></i></a></li>
                    
                 </ul> 
           </div>    
         </nav>
