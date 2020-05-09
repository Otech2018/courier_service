<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$cidx= (int)$_GET['cid'];
$sql = "SELECT *
		FROM tbl_courier
		WHERE cid = '$cidx'";
$result = dbQuery($sql);		
while($data = dbFetchAssoc($result)){
extract($data);

$title = "Edit Courier";
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
								<h4>Update Tracking Info:</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" action="processes.php?action=add-location" method="post"> 
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label"><strong>Tracking Status : </strong></label>	
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Tracking No : </label>
										<div class="col-sm-8">
											<input type="text" name="ManagerName" id="ManagerName" class="form-control1" readonly="true" value="<?php echo $cons_no;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Current Location: </label>
										<div class="col-sm-8">
											<input type="text" name="Location" id="Location" class="form-control1" placeholder="Current Location" required>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Status: </label>
										<div class="col-sm-8">
											<input type="text" name="Status" id="Status" class="form-control1" placeholder="Update Status" required>
										</div>
									</div>
									<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Current Date:</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="b_date" id="date" placeholder="Current Date" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Current Time:</label>
									<div class="col-sm-8">
										<input type="time" class="form-control1" name="b_time" id="time" placeholder="Current Time" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Remark: </label>
									<div class="col-sm-8">
										<textarea name="remark" cols="88" rows="2" id="Remark"></textarea>
									</div>
								</div>
									<div class="col-sm-offset-2"> 
									    <button type="submit" class="btn btn-default">Update Status</button> 
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
<?php
}
?>