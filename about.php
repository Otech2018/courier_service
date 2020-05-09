<?php 
$title = 'About';
include"inc/head.php";
?>
	<body data-scrolling-animations="true" >
		<div class="sp-body">
		
			<header id="this-is-top">
				<?php include"inc/top.php";?>
			</header>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>ABOUT US</h1></a>
					<div class="pull-right">
						<a href="index.php?air-Cargos"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="about.php?air=Cargos">About Us</a>
					</div>
				</div>
			</div>

			<div class="container-fluid inner-offset">
				<div class="hgroup text-center wow zoomIn" data-wow-delay="0.3s">
					<h1>FOR ALL YOUR LOGICTICS NEEDS</h1>
					<h2>ATLANTIC GLOBAL DELIVERY IS THE RIGHT CHOICE</h2>
				</div>            
				<h1 align='center'class=" wow fadeIn" data-wow-delay="0.3s" style='color:#6054c2;font-size:44px;'>
					ABOUT US <hr/>
				</h1>

				<div class="tab-content inner-offset wow fadeIn" data-wow-delay="0.3s">
					<div class="tab-pane active" id="tab1">
						<div class="row">
							<div class="col-sm-5">
								<img class="full-width" src="img/1op.jpg" alt="Img" height='350px;'>
							</div>
							<div class="col-sm-7">
								<p><b><?php echo $site_name; ?></b>  is a private, ultra-secure shipping, logistics and storage facility. 
								We are the only unique private shipping and vault facility. We offer courier and delivery services, 
								logistic services, private safe deposit boxes, customized storage lockers and mini-vaults for lease inside 
								our facility. For many individuals, corporate bodies and non-government, accepting physical delivery of v
								aluable assets can cause anxiety and concerns with regards to safety and can be disheartening. we offer an 
								alternative, safe and managed storage solution for these assets. It is our concern therefore to ensure our 
								customers know that their valuable assets are highly protected with modern, high-security storage facilities.</p>
								<p>Our facilities are fully-segregated and insured. All of our clients' assets are recorded to ensure
								accountability. To make our services that simple, we encourage our clients that they will retain exactly 
								what was deposited in the exact same place they put them. Whether you need warehousing, storage containers 
								or transport solutions, Equity Shipping And Security Company to see how we can help with your business needs
								in Asia, the Midwest, Africa or throughout the United States and Europe. </p>
								<p>We take an alternative route to a bank system deposit box or storage unit where individuals are able to 
								store valuables at the highest level of security. We are proud to offer ultra-secure storage space that is
								more protected than your home, and more enhanced than your bank. </p>
							</div>
						</div>
					</div>
				</div>

				
				
				  <?php include"inc/counter.php";?> 
			</div>
         <?php include"inc/foot.php";?>
		</div>
                
   <?php include"inc/foot_script.php";?>    
	</body>
</html>