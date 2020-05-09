<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, cons_no, ship_name, rev_name, r_phone, dept_time, pick_time, status
		FROM tbl_courier
		WHERE status != 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($sql);

if(isset($_GET['action']))
		  {
		          $sql = "DELETE FROM tbl_courier WHERE cons_no = '".$_GET['consNo']."'";
                  $result1 = dbQuery($sql);				  
				  if($result1)
				  {
                      $sql = "DELETE FROM tbl_invoice WHERE cons_no = '".$_GET['consNo']."'";
                      $result1 = dbQuery($sql);	
                      if($result1)
				      {	
				  
					 echo "<script>window.location.replace(\"courier-list.php\");</script>"; 

					  }else{
						  $_SESSION['msg']="Error!! Cant Delete";
					  }
				  }
		  }

$title = "Courier List";
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
						<h4>Courier Tracking List:</h4>
						<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php // echo 
								htmlentities($_SESSION['msg']="");?></p>	
						    <table class="table table-bordered"> 
							    <thead> 
								    <tr> 
									    <th>#</th> 
										<th>Tracking No</th> 
										<th>Sender Name</th> 
										<th>Receiver Name</th> 
										<th>Receiver Number</th> 
										<th>Dept Date</th> 
										<th>Pickup Date</th> 
										<th>Status</th> 
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
										<td><?php echo $cons_no; ?></td> 
										<td><?php echo $ship_name; ?></td> 
										<td><?php echo $rev_name; ?></td> 
										<td><?php echo $r_phone; ?></td> 
										<td><?php echo $dept_time; ?></td> 
										<td><?php echo $pick_time; ?></td> 
										<td><?php echo $status; ?></td> 
										<td><a href="edit-courier.php?cid=<?php echo $cid; ?>"><i class="fa fa-edit" title="Update Status"></i> |
                                        <a href="full-update.php?cid=<?php echo $cid; ?>"><i class="fa fa-cog" title="Full Edit"></i> | 										
										<a href="courier-list.php?consNo=<?php echo $cons_no; ?>&action=delete" onClick="return confirm('Confirm Delete ? The Info attached to this will be deleted')"><i class="fa fa-trash" title="Delete"></i></td>										
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