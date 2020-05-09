<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, cons_no, fl_name, fl_class, fl_number, fl_destination, fl_dept_time, fl_ariv_time, fl_status
		FROM tbl_flight
		WHERE fl_status != 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($sql);

if(isset($_GET['action']))
		  {
		          $sql = "DELETE FROM tbl_flight WHERE cons_no = '".$_GET['consNo']."'";
                  $result1 = dbQuery($sql);				  
				  if($result1)
				  {
                      $sql = "DELETE FROM tbl_flight_loca WHERE cons_no = '".$_GET['consNo']."'";
                      $result1 = dbQuery($sql);	
                      if($result1)
				      {					  
					  echo "<script>window.location.replace(\"flight-list.php\");</script>"; 

					  }else{
						  $_SESSION['msg']="Error!! Cant Delete";
					  }
				  }
		  }

$title = "Flight List";
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
						<h4>Flight Tracking List:</h4>
						<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
						    <table class="table table-bordered"> 
							    <thead> 
								    <tr> 
									    <th>#</th> 
										<th>Tracking No</th> 
										<th>Flight Name</th> 
										<th>Flight Number</th> 
										<th>Flight Class</th> 
										<th>Flight Destination</th> 
										<th>Dept Time</th> 
										<th>Arrivl Time</th> 
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
										<td><?php echo $fl_name; ?></td> 
										<td><?php echo $fl_number; ?></td> 
										<td><?php echo $fl_class; ?></td> 
										<td><?php echo $fl_destination; ?></td> 
										<td><?php echo $fl_dept_time; ?></td> 
										<td><?php echo $fl_ariv_time; ?></td> 
										<td><?php echo $fl_status; ?></td> 
										<td><a href="edit-flight.php?cid=<?php echo $cid; ?>"><i class="fa fa-edit" title="Update Status"></i>  									
										<a href="flight-list.php?consNo=<?php echo $cons_no; ?>&action=delete" onClick="return confirm('Confirm Delete ? The Info attached to this will be deleted')"><i class="fa fa-trash" title="Delete"></i></td>										
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