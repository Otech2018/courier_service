<?php 
//start session
session_start();

require('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-cons':
		addCons();
	break;
	
	case 'edit-cons':
		editCons();
	break;
	
	case 'add-flight':
		addFlight();
	break;
	
	case 'delivered':
		markDelivered();
	break;
	
	case 'add-office':
		addNewOffice();
	break;
	
	case 'add-manager':
		addManager();
	break;
	
	case 'update-status':
		updateStatus();
	break;
	
	case 'change-pass':
		changePass();
	break;
			
	case 'logOut':
		logOut();
	break;		
	
}//switch

function addCons(){

	$Shippername = $_POST['Shippername'];
	$Shipperphone = $_POST['Shipperphone'];
	$Shipperemail = $_POST['Shipperemail'];
	$Shipperaddress = $_POST['Shipperaddress'];
	
	$Receivername = $_POST['Receivername'];
	$Receiverphone = $_POST['Receiverphone'];
	$Receiveraddress = $_POST['Receiveraddress'];
	$Receiveremail = $_POST['Receiveremail'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$deptFrom = $_POST['deptFrom'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['Weight'];
	$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];
	//$cashp = $_POST['cashp'];
	$shippingFee = $_POST['shippingFee'];
	//$custom = $_POST['custom'];
	$custom  = 0;
	$handlingfee = $_POST['handlingfee'];
	$insurancefee = $_POST['insurancefee'];
	$admincharge = $_POST['admincharge'];

	$total = $Qnty * $shippingFee;
	$Gtotal = $total + $custom + $handlingfee + $insurancefee + $admincharge;
	
	$Depttime = $_POST['Depttime'];
	$Destination = $_POST['Destination'];
	$Pickuptime = $_POST['Packupdate'];
	$Picktime = $_POST['Picktime'];
	$Mode = $_POST['Mode'];
	
	$status = $_POST['status'];
	$remark = $_POST['remark'];
	$b_date = $_POST['b_date'];
	$b_time = $_POST['b_time'];
	$cur_date = $b_date." ".$b_time;

	$sql = "INSERT INTO tbl_courier (cons_no, dept_from, ship_name, phone, s_add, s_email, rev_name, r_phone, r_add,  r_email, type, weight, invice_no, qty, ship_fee, custom_fee, handlingfee, insurancefee, admincharge, destination, mode, dept_time, pick_time, p_time, status, location, book_date )
			VALUES('$ConsignmentNo', '$deptFrom', '$Shippername', '$Shipperphone', '$Shipperaddress', '$Shipperemail',  '$Receivername','$Receiverphone','$Receiveraddress','$Receiveremail', '$Shiptype', '$Weight', '$Invoiceno', '$Qnty', '$shippingFee', '$custom', '$handlingfee', '$insurancefee', '$admincharge', '$Destination', '$Mode', '$Depttime', '$Pickuptime', '$Picktime', '$status', '$deptFrom', '$cur_date')";	
	
	dbQuery($sql);
	
	$sql2 = "INSERT INTO tbl_invoice (cons_no, book_date, status, location, remark) VALUES('$ConsignmentNo','$cur_date','$status','$deptFrom','$remark')";
	//echo $sql;
	dbQuery($sql2);
	
	if($sql and $sql2)
	{
	  	
     echo "<script>window.location.replace(\"courier-add-success.php\");</script>"; 

	}else
	{
	   
		echo "<script>alert(\"Invalid Process\");</script>"; 

		echo "<script>window.location.replace(\"courier-add-success.php\");</script>"; 

	}

	//echo $Ship;
  
}//addCons

function editCons(){

	$Shippername = $_POST['Shippername'];
	$Shipperphone = $_POST['Shipperphone'];
	$Shipperemail = $_POST['Shipperemail'];
	$Shipperaddress = $_POST['Shipperaddress'];
	
	$Receivername = $_POST['Receivername'];
	$Receiverphone = $_POST['Receiverphone'];
	$Receiveraddress = $_POST['Receiveraddress'];
	$Receiveremail = $_POST['Receiveremail'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$deptFrom = $_POST['deptFrom'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['Weight'];
	$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];
	//$cashp = $_POST['cashp'];
	$shippingFee = $_POST['shippingFee'];
	//$custom = $_POST['custom'];
	$custom  = 0;
	$handlingfee = $_POST['handlingfee'];
	$insurancefee = $_POST['insurancefee'];
	$admincharge = $_POST['admincharge'];

	$total = $Qnty * $shippingFee;
	$Gtotal = $total + $custom + $handlingfee + $insurancefee + $admincharge;
	
	$Depttime = $_POST['Depttime'];
	$Destination = $_POST['Destination'];
	$Pickuptime = $_POST['Packupdate'];
	$Picktime = $_POST['Picktime'];
	$Mode = $_POST['Mode'];
	
	$status = $_POST['status'];
	$remark = $_POST['remark'];
	$b_date = $_POST['b_date'];
	$b_time = $_POST['b_time'];
	$cur_date = $b_date." ".$b_time;
	
	$sql = "UPDATE tbl_courier SET 
	               cons_no = '$ConsignmentNo', 
	               dept_from = '$deptFrom', 
	               ship_name = '$Shippername',
	               phone = '$Shipperphone', 
	               s_add = '$Shipperaddress',
	               s_email = '$Shipperemail', 
	               rev_name = '$Receivername', 
	               r_phone = '$Receiverphone', 
	               r_add = '$Receiveraddress',  
	               r_email = '$Receiveremail',
	               type = '$Shiptype',
	               weight = '$Weight',
	               invice_no = '$Invoiceno',
	               qty = '$Qnty',
	               ship_fee = '$shippingFee',
	               custom_fee = '$custom',
	               handlingfee = '$handlingfee',
	               insurancefee = '$insurancefee',
	               admincharge = '$admincharge',
	               destination = '$Destination',
	               mode = '$Mode',
	               dept_time = '$Depttime',
	               pick_time = '$Pickuptime',
	               p_time = '$Picktime',
	               status ='$status',
	               location = '$deptFrom'
	               WHERE cons_no = '$ConsignmentNo'";
	dbQuery($sql);
	
	$sql2 = "UPDATE tbl_invoice SET
	                cons_no = '$ConsignmentNo',
	                book_date = '$cur_date',
					status = '$status',
	                location = '$deptFrom',
	                remark = '$remark' 
	                WHERE cons_no = '$ConsignmentNo'";
	//echo $sql;
	dbQuery($sql2);
	
	if($sql and $sql2)
	{
	    
    	$todays = date('h-i-s');
    	$pin = mt_rand(1000, 9999);
        //echo '0'."".$pin;
        //$refno = mt_rand(100, 999);
       
	    echo "<script>window.location.replace(\"courier-edit-success.php\");</script>"; 

	}else
	{
	   echo "<script>alert(\"Invalid Process\");</script>"; 

		echo "<script>window.location.replace(\"courier-add-success.php\");</script>"; 

	}

	//echo $Ship;
  
}//editCons

function addFlight(){

	$Flightname = $_POST['Flightname'];
	$Flightno = $_POST['Flightno'];
	$FLightclass = $_POST['FLightclass'];
	
	$Receiveremail = $_POST['Receiveremail'];
	$Senderemail = $_POST['Senderemail'];
	$seatNo = $_POST['seatNo'];
	$departGate = $_POST['departGate'];
	
	$destination = $_POST['destination'];
	$Departime = $_POST['departime'];
	$Arrivaltime = $_POST['arrivaltime'];
	$Address = $_POST['Address'];
	
	$status = $_POST['status'];
	$today = date("F j, Y, g:i a");

	$sql = "INSERT INTO tbl_flight (cons_no, fl_name, fl_number, fl_class, fl_s_email, fl_r_email, fl_destination, fl_seat_no, fl_dept_time, fl_ariv_time, fl_address, book_date, fl_status)
			VALUES('$Flightno', '$Flightname', '$Flightno', '$FLightclass', '$Senderemail', '$Receiveremail', '$destination', '$seatNo', '$Departime','$Arrivaltime','$Address', '$today', '$status')";	
	
	dbQuery($sql);
	
	$sql2 = "INSERT INTO tbl_flight_loca (cons_no, book_date, location) VALUES('$Flightno','$today','$destination')";
	//echo $sql;
	dbQuery($sql2);
	
	if($sql and $sql2)
	{
	 echo "<script>window.location.replace(\"flight-add-success.php\");</script>"; 
 
	}else
	{
	  echo "<script>alert(\"Invalid Process\");</script>"; 

		echo "<script>window.location.replace(\"add-flight.php\");</script>"; 

	}

	//echo $Ship;
  
}//addFlight

function markDelivered() {
	$cid = (int)$_GET['cid'];
	$sql = "UPDATE tbl_courier
			SET status = 'Delivered'
			WHERE cid= $cid";
	dbQuery($sql);
	header('Location: delivered-success.php'); 
			
}//markDelivered();

function addNewOffice() {
	
	$OfficeName = $_POST['OfficeName'];
	$OfficeAddress = $_POST['OfficeAddress'];
	$City = $_POST['City'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeTiming = $_POST['OfficeTiming'];
	$ContactPerson = $_POST['ContactPerson'];
	
	$sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$PhoneNo', '$OfficeTiming', '$ContactPerson')";
	dbQuery($sql);
	header('Location: office-add-success.php');
}//addNewOffice

function addManager() {
	
	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	//$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo', NOW())";
	dbQuery($sql);
	header('Location: manager-add-success.php');

}//addNewOffice

function updateStatus() {
	
	$OfficeName = $_POST['OfficeName'];
	$status = $_POST['status'];
	$comments = $_POST['comments'];
	$cid = (int)$_POST['cid'];
	$cons_no = $_POST['cons_no'];
	//$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_track (cid, cons_no, current_city, status, comments, bk_time)
			VALUES ($cid, '$cons_no', '$OfficeName', '$status', '$comments', NOW())";
	dbQuery($sql);
	
	$sql_1 = "UPDATE tbl_courier 
				SET status = '$status' 
				WHERE cid = $cid
				AND cons_no = '$cons_no'";
	dbQuery($sql_1);	
	
	header('Location: update-success.php');

}//addNewOffice



function logOut(){
	if(isset($_SESSION['user_name'])){
		unset($_SESSION['user_name']);
	}
	if(isset($_SESSION['user_type'])){
		unset($_SESSION['user_type']);
	}
	session_destroy();
	header('Location: login.php');
}//logOut

?>