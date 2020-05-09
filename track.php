<?php 
$title = 'Track';
include"inc/head.php";
require_once('database.php');
require_once('library.php');
?>

			<body data-scrolling-animations="true" style='background-color:#cccccc;' >
		<div class="sp-body">
			<header id="this-is-top">
				<?php include"inc/top.php";?>
			</header>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Shipment Tracking</h1></a>
					<div class="pull-right">
						<a href="index.php"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="track.php">Tracking</a>
					</div>
				</div>
			</div>
	<br/>
	<div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <h5>Check Vault OR Track Package</h5>
				    <div class="panel panel-info"  style="margin-bottom:10px;">
					    <div class="panel-heading">Track Shipment</div>
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
<style> 
.Finished 
{ background: #363C56; } 
.Delayed 
{ background: #F76063; } 
.On-Hold 
{ background: #4ECCDB; } 
.Landed 
{ background: #FF8A4B; } 
.label
{padding: 6px;} 
.In-Transit 
{ background:#00D96D; } 
.Delivered 
{ background:#FFBF00; }
section{
		width: 29%;
		float: left;
		margin:2% 2%;
		text-align: left;
	}
</style>
<center>
<form method="post" action="trackresult.php">
<table>
<tr>
<td>&nbsp;&nbsp;&nbsp;Tracking Number: </td><td>:&nbsp;&nbsp</td><td><input type="text" name="trackcode" size="26" style="border: 1px solid #E30016; height: 35px;" value="" placeholder="Enter Your Tracking " required/></td>
</tr>
<tr>

</tr>
</table>
<input type="hidden" name="pilih" value="transaksi" />
<input type="hidden" name="modul" value="yes" />
<input type="hidden" name="action" value="cari" />
<br><br>
&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="trackn">Track Your Delivery</button>
</form>
</center>
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