<?php
ob_start();
session_start();
$title = "ADMIN LOGIN";
require_once('inc/login_head.php');
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword']);
}
?>
<body onLoad="document.form1.txtusername.focus();">
<div class="main-content">
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page">
				<h2 class="title1">Admin Login</h2>
				<div class="widget-shadow">
							<font color="#FF0000" style="font-size:12px;">
								<center><?php echo $error; ?></center>
							</font>
					<div class="login-body">
						<form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
							<input type="text" class="user" name="txtusername" id="txtusername" placeholder="Username" required="">
							<input type="password" name="txtpassword" id="txtpassword"class="lock" placeholder="Password" required="">
							<input type="submit" name="Sign In" value="Sign In">
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<script src="js/js/jquery.nicescroll.js"></script>
	<script src="js/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>
<?php
ob_flush();
?>