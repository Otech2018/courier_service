<?php
$title = "Office Manager";
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
			    <div class="alert alert-success" role="alert">
					<strong>Well done!</strong>Office Manager is Added Successfully . <a href="manager-list">Click Here</a> To View all Office List </a>
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