<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$title = "Change Password";
require_once('inc/admin_head.php');
?>
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<?php require_once('inc/nav_admin.php');?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php require_once('inc/top_admin.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
	
	    <div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
				    <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Update Password:</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" action="processes.php?action=change-pass" method="post"> 
								    <div class="form-group"> 
									    <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label> 
										    <div class="col-sm-9"> <input type="password" name="ManagerName" class="form-control" id="inputPassword3" placeholder="Old Password"> </div> 
									</div>
                                    <div class="form-group"> 
									    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label> 
										    <div class="col-sm-9"> <input type="password" name="Pass" class="form-control" id="inputPassword3" placeholder="Password"> </div> 
									</div>									
									<div class="form-group"> 
									    <label for="inputPassword3" class="col-sm-2 control-label">Re-type Password</label> 
										    <div class="col-sm-9"> <input type="password" name="Pass1" class="form-control" id="inputPassword3" placeholder="Password"> </div> 
									</div>  
									<div class="col-sm-offset-2"> 
									    <button type="submit" class="btn btn-default">Change Password</button> 
									</div> 
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--footer-->
	<?php require_once("inc/admin_foot.php");?>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>

		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>