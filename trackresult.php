<!DOCTYPE html>
<?php 

require_once('inc/ot.php');?>
<html>
<head>
    <meta charset="utf-8" />	    
    <title>Track My Parcel </title>
	<meta name="author" content="">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--html5 ie include-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    
    <link rel="shortcut icon" href="img/<?php echo $site_logo; ?>" />
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="/Styles/ie-fixes.css" />
    <![endif]-->
	    <!-- Font Awesome CSS -->
	    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">  
    <link rel="canonical" href="tracking.php" />
    
    <!-- style -->
    <link href="css/cssefe4.css" rel="stylesheet"/>
	<link rel="stylesheet" href="css/tracking.css" type="text/css" />   
    <link href="css/track-order.css" rel="stylesheet" />

	
	  <style> .Finished { background: #363C56; } .Delayed { background: #F76063; } .On-Hold { background: #4ECCDB; } .Landed { background: #FF8A4B; } .label{padding: 6px;} .In-Transit { background:#00D96D; } .Delivered { background:#FFBF00; }</style>
	
</head>

   <!-- Menu -->
<body>
    <div id="container">
<div class="fw mpHeader slide">
<header class="mpdHeader">
<a href='index.php' class="mpd-logo" tabindex="-1">
    <div><span class=""></span></div>
    <div class="mpd-logo-text"><img src="img/<?php echo $site_logo; ?>" style="width:80px;height:0px;"></div>
</a><!-- logo -->

<!--<div class="login-status">
    <a class="ga-trackevent" data-gacat="MainNav" data-galab="Login" href="login.php">Log in to My Account</a>
</div>--><!-- log in / out -->
<!-- Nav -->
<nav class="mpdNavigation">
    <div class="mobile-menu-header">Menu</div>
    <ul>
	
	<!--<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
        	
        <li><a href="track.php" class="ga-trackevent" data-gacat="MainNav" data-galab="Tracking" tabindex="-1">Track My Parcel</a></li>
     </span></a></li>        
		<li><a href="contact.php" class="ga-trackevent" data-gacat="MainNav" data-galab="Help" tabindex="-1">Contact us</a></li>
        <!--<li class="deskHide last-mob-link"><a href="javascript:void(0)" class="close-mob-menu fl pad-top-10">Close &raquo;</a></li>-->
        <li><a href="index.php" class="ga-trackevent" data-gacat="MainNav" data-galab="Help" tabindex="-1">Home</a></li>

    </ul>
</nav>

</header>
</div>    <!-- /Menu -->

<div class="slide">
</div>
<main class="slide" >
    <div class="fw">
            <section class="title">
                <p><header>
                    <center><h4><img src="img/<?php echo $site_logo; ?>" style="width:80px;height:80px;" /> <br/> Parcel Track Result <hr/></h4></center>					                   
                </header>
				<div class="media-center">
                    
                    </div>
            </section>
    </div>  

<div class="container">


 <div>
<script type="text/javascript">
function redirect()
{

}
</script>

<table border="10px" align="center" width="100%" class='alert alert-success'>

	<?php
require_once('database.php');
require_once('library.php');

	$cons= $_POST['trackcode'];
	
	if($_POST['trackcode'] == ''){
		
		  echo "<script>window.location.replace(\"index.php\");</script>"; 
	}
	
    $sql = "SELECT *
			FROM tbl_courier
			WHERE cons_no = '$cons'";
	$result = dbQuery($sql);
	$no = dbNumRows($result);
	if($no < 1){
	
	}else{
	while($data = dbFetchAssoc($result)) {
	extract($data);
	
	$total = $ship_fee + $custom_fee + $handlingfee + $insurancefee + $admincharge;
	$Gtotal = $total  * $qty;
	
	echo'
	<div class="row">
		 <div class="col-md-6">			  
				<center><h4><!--<i class="fa fa-barcode" style="width: 25px; font-size: 35px; float: center;" ></i>&nbsp;&nbsp;&nbsp;--> Consignment No:&nbsp<font color="Blue"><strong>'.$cons_no.'</strong></font></span></h4></center>			 
		</div>
		<div class="col-md-6">
			  <font  color="Black" face="arial,verdana" ><strong>Status</strong></font>:&nbsp;<span class="label On-Hold label-big"><font size=2 color="White" face="arial,verdana">'.$status.'</font></span>&nbsp;
			  <font  color="Black" face="arial,verdana"><strong>Payment Status</strong></font>:&nbsp;<span class="label label-danger"><i class="fa fa-money"></i><font size=2 color="White" face="arial,verdana"> ToPay</font></span>
			  
		</div>
	</div>
    <div class="col-md-6">
      <table class="table table-striped">
        <tr>  </tr>
      </table>
    </div>
   <hr />
	<div class="row">
		<div class="col-md-4"> <font size=3 color="Black" face="arial,verdana"><strong>Scheduled Delivery Date</strong></font><br />
		'.$pick_time.', By end of day 
		</div>
	</div>
	<hr />

	<div class="row" margin-left="10px">
		<div class="col-md-12">
			<h4>Shipping Information</h4>
		</div>
		<br/><font size=2 color="black" face="arial,verdana">
			<div class="col-md-4"><font size=2 color="Black" face="arial,verdana"><strong>Destination:</strong></font> '.$destination.'<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Mode:</strong></font> COURIER<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Content:</strong></font> '.$type.'<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Weight:</strong></font> '.$weight.' Kg<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Pickup Date/Time:</strong></font> '.$pick_time.'<br/>   
			<font size=2 color="Black" face="arial,verdana"><strong>Package Description:</strong></font> '.$type.'<br/>
			<font size=2 color="Black" face="arial,verdana"><strong>Current Location:</strong></font> '.$location.'<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Total Freight Cost:</strong></font> ($) '.$Gtotal.'
		</div><br/>
		<div class="col-md-4"><font size=3 color="black" face="arial,verdana"><strong>Shipper Information</strong></font><br />
			<font size=2 color="Black" face="arial,verdana"><strong>Name:</strong></font> '.$ship_name.'<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Phone:</strong></font> '.$phone.'<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Address:</strong></font>  '.$s_add.' 
		</div><br/>
		<div class="col-md-4"><font size=3 color="black" face="arial,verdana"><strong>Recipient Information</strong></font><br />
			<font size=2 color="Black" face="arial,verdana"><strong>Name:</strong></font> '.$rev_name.' <br />
			<font size=2 color="Black" face="arial,verdana"><strong>Phone:</strong></font> '.$r_phone.'<br />
			<font size=2 color="Black" face="arial,verdana"><strong>Address:</strong></font>  '.$r_add.'
		</div>
	</div>';
  }//while
}//if
?>
<?php
	echo 
	'<hr />
	<div class="row">
	  <div class="col-md-12">
		<h4>Parcel/Item Delivery Status & History</h4>
		<br/>
		<table class="table table-bordered table-striped table-hover" >
		<tr class="car_bold col_dark_bold" align="center">
		</td>
			<th>Current Location</th>
			<th>Status</th>
			<th>Date/Time</th>
			<th>Remarks</th>
		</tr>';
		
	$sql2 = "SELECT *
			FROM tbl_invoice
			WHERE cons_no = '$cons' ORDER BY cid ASC";
	$results = dbQuery($sql2);
	$nos = dbNumRows($results);
	if($nos < 1){
		
	}else{
	$can = 1;
	while($datas = dbFetchAssoc($results)) {
	extract($datas);

	echo '
	        <tr>
				<!--<td>'.$can++.'</td>-->
				<td>'.$location.'</td>
				<td>'.$status.'</td>
				<td>'.$book_date.'</td>
				<td>'.$remark.'</td>
			</tr>';
			 }
        }
			echo '</table>		</div>
	</div>';
			echo'<br>';
			echo'<br>';

?>
			
				
		
</div>

</div> 

 </main>
<center><div class="mapouter"><div class="gmap_canvas"><iframe width="864" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:500px;width:1000px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style></div></center>

   <!-- Footer -->

    <!-- /Footer -->
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/CookieManager.js"></script>
    <script src="js/ga-events.js"></script>   
    <script src="js/jqueryval.js"></script>
    <script src="js/tracking.js"></script>

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0701'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>


<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0701'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>
