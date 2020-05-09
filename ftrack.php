<?php 
$title = 'Track';
include"inc/head.php";
require_once('database.php');
require_once('library.php');
?>
	<body data-scrolling-animations="true" >
		<div class="sp-body">
			<header id="this-is-top">
				<?php include"inc/top.php";?>
			</header>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Flight Shipping Tracking</h1></a>
					<div class="pull-right">
						<a href="index.php"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="ftrack.php">Flight Tracking</a>
					</div>
				</div>
			</div>
	<br/>
	<div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <h5>Track Flight Location</h5>
				    <div class="panel panel-info"  style="margin-bottom:10px;">
					    <div class="panel-heading">Track Flight</div>
					        <div class="panel-body"><p>
      
<style type="text/css">

#tabel {
padding:0px;
}


#tabel tr.head {
height:20px;
background:#d1d1d1;
}
#tabel tr.head td{
	border-right: 1px solid #d1d1d1;
	border-bottom: 1px solid #d1d1d1;
	border-top: 1px solid #d1d1d1;
	background: #efefef;
	padding-top:4px;
	padding-bottom:4px;
	padding-left:8px;
	padding-right:8px;
	color: #4f6b72;
	font-weight:bold;
}
#tabel tr.head td.depan, tr.isi td.depan{
border-left: 1px solid #d1d1d1;
}
#tabel tr.isi td{
border-right: 1px solid #d1d1d1;
	border-bottom: 1px solid #d1d1d1;
	padding-top:4px;
	padding-bottom:4px;
	padding-left:8px;
	padding-right:8px;
	color: #4f6b72;
}
.table_border_bottom{
color: #fff;
  background-color: #ca1f26;
  border-color: #ca1f26;
}

</style>

<center><form method="post" action="">
<table>
<tr>
<td>&nbsp;&nbsp;&nbsp;Flight Number: </td><td>:&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="trackcode" size="33"  value="" required/></td>
</tr>
<tr>

</tr>
</table>
<input type="hidden" name="pilih" value="transaksi" />
<input type="hidden" name="modul" value="yes" />
<input type="hidden" name="action" value="cari" />
<br><br>
&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="trackn">Track Flight</button>
</form></center>
<br>
<?php
require_once('database.php');
require_once('library.php');

if(isset($_POST['trackn']))
{
	
	$cons= $_POST['trackcode'];
	
    $sql = "SELECT *
			FROM tbl_flight
			WHERE cons_no = '$cons'";
	$result = dbQuery($sql);
	$no = dbNumRows($result);
	if($no < 1){
		echo "<script>alert('Invalid Tracking Number')</script>";
	}else{
	while($data = dbFetchAssoc($result)) {
	extract($data);
	
	echo'
	   <div class="table-responsive"><table class="table table-hover"><tr>
	    <td>Flight Name</td>
        <td>Flight Number</td>		
        <td>Booked Date</td>		
		<td>Flight Class</td>
		<td>Flight Destination</td>
		<td>Departure Time</td>
		<td>Arrival Time</td>
		<td>Address</td>
		
		<td>Flight Status</td>
		</tr>
		
		<tr class=isi style="background:#f9f9f9">
		<td>'.$fl_name.'</td>
		<td>'.$fl_number.'</td>
		<td>'.$book_date.'</td>
		<td>'.$fl_class.' </td>
		<td>'.$fl_destination.'</td>
		<td>'.$fl_dept_time.'</td>
		<td>'.$fl_ariv_time.'</td>
		<td>'.$fl_address.'</td>
		
		<td>'.$fl_status.'</td>
	    </tr>
		
		</table></div>
	';
  }//while
}//if
?>
<?php
	echo '<p align=center></p><br/>Tracking History
		<div class="table-responsive">
		<table class="table table-hover">
		<tr>
			<th>No.</th>
			<th>Name of Courier</th>
			<th>Date</th>
			<th>Status</th>
		</tr>';
		
	$sql2 = "SELECT *
			FROM tbl_flight_loca
			WHERE cons_no = '$cons' ORDER BY cid ASC";
	$results = dbQuery($sql2);
	$nos = dbNumRows($results);
	if($nos < 1){
		echo "<script>alert('Invalid Tracking Number')</script>";
	}else{
	$can = 1;
	while($datas = dbFetchAssoc($results)) {
	extract($datas);

	echo '
	        <tr>
				<td>'.$can++.'</td>
				<td>'. $site_name.' </td>
				<td>'.$book_date.'</td>
				<td>'.$location.'</td>
			</tr>';
			 }
        }
			echo '</table>';
}
?>

							</p>
						</div>
					</div>
					<hr>
				</div>
			</div> <!-- /.col-xs-12 -->
		</div> <!-- /.row -->
	</div>

        <?php include"inc/foot.php";?>
		</div>

		
  <?php include"inc/foot_script.php";?>
	</body>
</html>