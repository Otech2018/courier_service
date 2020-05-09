<?php
ob_start();
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$title = "Add New Officer";
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
				    <div class="row">
						<h3 class="title1">Add New Manager / Account :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="process.php?action=add-manager" method="post">
							    <div class="form-group">
								    <label for="focusedinput" class="col-sm-2 control-label"><strong>Account / Manager  info : </strong></label>	
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Manager  Name : </label>
									<div class="col-sm-8">
										<input type="text" name="ManagerName" class="form-control1" id="ManagerName" placeholder="Manager Name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password : </label>
									<div class="col-sm-8">
										<input type="text" name="Password" class="form-control1" id="Password" placeholder="Password " required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Address: </label>
									<div class="col-sm-8">
										<textarea name="Address" cols="88" rows="2" id="Address"></textarea>
									</div>
								</div>
						      
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Email :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="Email" id="Email" placeholder="Email" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Phone Number:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="PhoneNo" id="PhoneNo" placeholder="Phone No" required>
									</div>
								</div>
								<div class="col-sm-offset-2"> 
									    <button type="submit" class="btn btn-default" onClick="MM_validateForm('ManagerName','','R','Password','','R','Email','','RisEmail','PhoneNo','','R','Address','','R');return document.MM_returnValue">Add</button> 
								</div>
							</form>
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
<?php
ob_flush();
?>