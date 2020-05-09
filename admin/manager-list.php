<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT *
		FROM tbl_courier_officers WHERE officer_name != 'admin'";
$result = dbQuery($sql);

if(isset($_GET['action']))
		  {
		          $sql = "DELETE FROM tbl_courier_officers WHERE cid = '".$_GET['Mid']."'";
                  $result1 = dbQuery($sql);				  
				  if($result1)
				  {					  
					  echo "<script>window.location.replace(\"manager-list.php\");</script>"; 
	
				  }else{
					  $_SESSION['msg']="Error!! Cant Delete";
				  }
		  }

$title = "Manager List";
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
				<div class="tables">
				    <div class="table-responsive bs-example widget-shadow">
						<h4>View All Manager Details</h4>
						<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
						    <table class="table table-bordered"> 
							    <thead> 
								    <tr> 
									    <th>#</th> 
										<th>Officer Name</th> 
										<th>Address</th> 
										<th>Email</th> 
										<th>Phone Numner</th>
										<th>Action</th> 
									</tr> 
								</thead>
								<?php
	                            $can=1;
								while($data = dbFetchAssoc($result)){
								extract($data);	
								?>
							    <tbody> 
								    <tr> 
								        <th scope="row"><?php echo $can++; ?></th> 
										<td><?php echo $officer_name; ?></td> 
										<td><?php echo $address; ?></td> 
										<td><?php echo $email; ?></td> 
										<td><?php echo $ph_no; ?></td>
										<td><a href="manager-list.php?Mid=<?php echo $cid; ?>&action=delete" onClick="return confirm('Confirm Delete ? This Manager details will be deleted')"><i class="fa fa-trash" title="Delete"></i></td>										
									</tr>
								</tbody>
								<?php
								}//while
								?>
							</table> 
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