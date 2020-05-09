<?php 
//start session
session_start();
require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-cons':
		addCons();
	break;
	
	case 'delivered':
		markDelivered();
	break;
	
	case 'add-office':
		addNewOffice();
	break;
	
	case 'add-lati':
		addCordinate();
	break;
	
	case 'add-manager':
		addManager();
	break;
	
	case 'add-location':
		addLocation();
	break;
	
	case 'edit-flight':
		editFlight();
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
	$Shipperaddress = $_POST['Shipperaddress'];
	
	$Receivername = $_POST['Receivername'];
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$status = $_POST['status'];
	/*$Receiverphone = $_POST['Receiverphone'];
	$Receiveraddress = $_POST['Receiveraddress'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['Weight'];
	$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];

	$Bookingmode = $_POST['Bookingmode'];
	$Totalfreight = $_POST['Totalfreight'];
	$Mode = $_POST['Mode'];
	
	
	$Packupdate = $_POST['Packupdate'];
	$Pickuptime = $_POST['Pickuptime'];
	$status = $_POST['status'];
	$Comments = $_POST['Comments'];*/
	

	$sql = "INSERT INTO tbl_courier (cons_no, ship_name, phone, s_add, rev_name, status, book_date )
			VALUES('$ConsignmentNo', '$Shippername','$Shipperphone', '$Shipperaddress', '$Receivername', '$status', NOW())";	
	//echo $sql;
	dbQuery($sql);
	//----------------------------------
	$sql_1 = "INSERT INTO tbl_location (tracking_no, cur_status) VALUES('$ConsignmentNo','Moving')";
	
	dbQuery($sql_1);
	header('Location: vehicle-success.php'); 
	
	//echo $Ship;
}//addCons

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

function addCordinate() {
	
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	
	$sql = "INSERT INTO location (lat, lon)
			VALUES ('$lat', '$long')";
	dbQuery($sql);
	header('Location: tracker/index.php');
}//addCordinate

function addManager() {
	
	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo', '$OfficeName', NOW())";
	dbQuery($sql);
	header('Location: manager-add-success.php');

}//addNewOffice

function addLocation() {
	//$cid = (int)$_GET['cid'];
	$ManagerName = $_POST['ManagerName'];
	$location = $_POST['Location'];
	$status = $_POST['Status'];
	$remark = $_POST['remark'];
	$b_date = $_POST['b_date'];
	$b_time = $_POST['b_time'];
	$cur_date = $b_date." ".$b_time;
	
	$sql = "UPDATE tbl_courier 
	          SET location = '$location', status = '$status'
			  WHERE cons_no = '$ManagerName'";
	dbQuery($sql);
	
	$sql2 = "INSERT INTO tbl_invoice SET 
	                                location  = '$location',
	                                status    = '$status',
	                                book_date = '$cur_date',
	                                remark = '$remark',
	                                cons_no   = '$ManagerName'";
	dbQuery($sql2);
	$_SESSION['msg']="Edited Successfully!!";
	header('Location: courier-list.php');

}//addNewLocation

function editFlight() {
	//$cid = (int)$_GET['cid'];
	$ManagerName = $_POST['ManagerName'];
	$location = $_POST['Location'];
	$today = date("F j, Y");
	
	$sql = "UPDATE tbl_flight 
	          SET fl_status = '$location'
			  WHERE cons_no = '$ManagerName'";
	dbQuery($sql);
	
	$sql2 = "INSERT INTO tbl_flight_loca SET 
	                                location  = '$location',
	                                book_date = '$today',
	                                cons_no   = '$ManagerName'";
	dbQuery($sql2);
	$_SESSION['msg']="Edited Successfully!!";
	header('Location: flight-list.php');

}//addNewLocation

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

}//updateStatus

function changePass() {
	
	$unam = $_SESSION['user_name'];
	
	$ManagerName = $_POST['ManagerName'];
	$Pass = $_POST['Pass'];
	$Pass1 = $_POST['Pass1'];
	
	$sql_2 = "SELECT off_pwd FROM tbl_courier_officers WHERE officer_name = '$unam'";
	$results = dbQuery($sql_2);
	$no = dbNumRows($results);
	if($no < $ManagerName){
		echo "<script>alert('Old Password Not Matched With Any..Try Again')</script>";
		  echo "<script>window.location.replace(\"change-pass.php\");</script>"; 
	}else{
	
	if($Pass != $Pass1)
	{
		echo "<script>alert('Password Mis-Match..Try Again')</script>"; 
		echo "<script>window.location.replace(\"change-pass.php\");</script>"; 
	}else{
	
	$sql = "UPDATE tbl_courier_officers SET off_pwd = '$Pass' WHERE officer_name = '$unam'";
	dbQuery($sql);
	echo "<script>alert('Password Changed..Thank You')</script>";
	echo "<script>window.location.replace(\"change-pass.php\");</script>"; 
	}
  }
}//EditPassword



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