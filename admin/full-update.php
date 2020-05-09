<?php
ob_start();
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

$title = "Edit  Shipment";
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
	<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	// Make a date object.
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		// Make a row of that day!
		ds_echo (ds_template_day(i + 1, m, y));
		// This is not first loop anymore...
		first_loop = 0;
		// What is the next day?
		j ++;
		j %= 7;

	}
	// Do the footer
	ds_echo (ds_template_main_below());
	// And let's display..
	ds_ob_flush();
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
	ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	// Increase the current year.
	ds_c_year++;
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
	// 2 digits month.
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	// 2 digits day.
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	// YYYY-MM-DD
	return d2 + '/' + m2 + '/'+ y;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	// Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

function getSelected(opt)
 {
 
 	var opt=document.frmExport.opt;
            for (var intLoop = 0; intLoop < opt.length; intLoop++)
			 {
			  if (!(opt.options[intLoop].selected))
			   {
			   		alert("Select any one field!");
					return false;
               }
		    }
			return true;           
  }

// And here is the end.

// ]]> -->
</script>
	    <div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
				    <div class="row">
						<h3 class="title1">Edit Shipping Info:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="process.php?action=edit-cons" method="post">
							    <div class="form-group">
								    <label for="focusedinput" class="col-sm-2 control-label"><strong>Sender Info: </strong></label>	
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Sender Name: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $ship_name;?>" name="Shippername" class="form-control1" id="Shippername" placeholder="Sender Name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Phone Number: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $phone;?>" name="Shipperphone" class="form-control1" id="Shipperphone" placeholder="Phone Number" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email Address: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $s_email;?>" name="Shipperemail" class="form-control1" id="Shipperemail" placeholder="Email Address" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Address: </label>
									<div class="col-sm-8">
										<textarea name="Shipperaddress" cols="88" rows="2" id="Shipperaddress"><?php echo $s_add;?></textarea>
									</div>
								</div>
						        
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Receiver Info: </strong></label>
								</div>
						  
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Receiver Name:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $rev_name;?>" name="Receivername" id="Receivername" placeholder="Recepient Name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Receiver Phone Number:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $r_phone;?>" name="Receiverphone" id="Receiverphone" placeholder="Recepient Phone" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Receiver Email Address:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $r_email;?>" name="Receiveremail" id="Receiveremail" placeholder="Recepient Email Address" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Receiver Address: </label>
									<div class="col-sm-8">
										<textarea name="Receiveraddress" cols="88" rows="2" id="Receiveraddress"><?php echo $r_add;?></textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Shipment Info: </strong></label>
								</div>
								
								<!--<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Type of Shipment:</label>
									<div class="col-sm-8"><select id="Shiptype" value="<?php echo $type;?>" name="Shiptype" class="form-control1">
											<option value="Documents" selected="selected">Documents</option>
											<option value="Parcel">Parcel</option>
											<option value="Package">Package</option>
											<option value="Goods">Goods</option>
									</select></div>
								</div>-->
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Type of Shipment:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $type;?>" name="Shiptype" id="Shiptype" placeholder="Type of Shipment" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Depart From:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $dept_from;?>" name="deptFrom" id="deptFrom" placeholder="Depart From" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Weight:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $weight;?>" name="Weight" id="Weight" placeholder="Shipment Weight" required>
									</div>
									<div class="col-sm-2">
										<p class="help-block">(kg)</p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Quantity:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $qty;?>" name="Qnty" id="Qnty" placeholder="Shipment Quantity" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Consignment No:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $cons_no;?>" readonly="true" name="ConsignmentNo" id="ConsignmentNo" placeholder="Consignment No" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Invoice No:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $invice_no;?>" readonly="true" name="Invoiceno" id="Invoiceno" placeholder="Consignment No" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Shipping Fee:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $ship_fee;?>" name="shippingFee" id="shippingFee" placeholder="Shipping Fee">
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Custom Fee:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $custom_fee;?>" name="custom" id="customfee" placeholder="Custom Fee">
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Handling Fee:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $handlingfee;?>" name="handlingfee" id="handlingfee" placeholder="Handling Fee">
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Insurance Fee:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $insurancefee;?>" name="insurancefee" id="insurancefee" placeholder="Insurance Fee">
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Administrative Charges:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $admincharge;?>" name="admincharge" id="admincharge" placeholder="Administrative Charges">
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Mode of Shipment:</label>
									<div class="col-sm-8"><select value="<?php echo $mode;?>" name="Mode" id="Mode" class="form-control1">
											<option selected="selected" value="Air">Air</option>
											<option value="Road">Road</option>
											<option value="Train">Train</option>
											<option value="Sea">Sea</option>
									</select></div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Dept Date:</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" value="<?php echo $dept_time;?>" name="Depttime" id="Depttime" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Destination Office:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $destination;?>" name="Destination" id="Destination" placeholder="Destination Office">
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Pickup Date:</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" value="<?php echo $pick_time;?>" name="Packupdate" id="Packupdate" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Pickup Time:</label>
									<div class="col-sm-8">
										<input type="time" class="form-control1" value="<?php echo $p_time;?>" name="Picktime" id="Picktime" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText" class="col-sm-2 control-label">Status:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $status;?>" name="status" id="status" placeholder="Current Status" required>
									</div>
								</div>
								<div class="col-sm-offset-2"> 
									    <button type="submit" class="btn btn-default" onClick="MM_validateForm('Shippername','','R','Shipperphone','','R','Shipperaddress','','R','Receivername','','R','Receiveremail','','R','Receiveraddress','','R','Receiverphone','','R','ConsignmentNo','','R','Weight','','R','Invoiceno','','R','Qnty','','RisNum','cashp','','R','Pickuptime','','R','Shiptype','','R','Comments','','R','Weight','','RisNum','shippingFee','','R');return document.MM_returnValue">Update</button> 
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
}
ob_flush();
?>