<?php 
$title = 'Contact';
require_once "inc/head.php";
?>
	<body data-scrolling-animations="true" >
		<div class="sp-body">
			<header id="this-is-top">
				<?php require_once "inc/top.php";?>
			</header>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Contact Us</h1></a>
					<div class="pull-right">
						<a href="index.php?ex=Global"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact</a>
					</div>
				</div>
			</div>
			
            <div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>Head Office</h4>
						<p>Everyday is a new day for us and we work really hard to
							satisfy our customers everywhere.</p>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong><?php echo $site_name; ?></strong><br> <?php echo $site_address; ?> </div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div><?php echo $site_phone; ?></div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div><?php echo $site_email; ?></div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div><?php echo $site_wrk_hrs; ?></div>
							</div>
						</div>
						</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>SEND us a message</h4>
						<p>Our Office Hours <?php echo $site_wrk_hrs; ?> </p>
						<div id="success"></div>
						<form novalidate id="contactForm" class="reply-form form-inline">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-name" id="user-name" placeholder="Full Name" required="required">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="user-email" id="user-email" placeholder="Email Address" required="required">
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-lastname" id="user-lastname" placeholder="Last Name">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="user-phone" id="user-phone" placeholder="Phone No.">
									</div>
								</div>
							</div>
							<div class="default-inp form-elem">
								<input type="text" name="user-subject" id="user-subject" placeholder="Subject">
							</div>
							<div class="form-elem default-inp">
								<textarea id="user-message" placeholder="Message"></textarea>
							</div>
							<div class="form-elem">
								<button type="submit" class="btn btn-danger">send message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-12 maps">
			<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" 
			src="https://maps.google.com/maps?q=new%20york%20city&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" 
			scrolling="no" marginheight="0" marginwidth="0"></iframe>
			
			</div>
			 <br/>
        <?php require_once "inc/foot.php";?>
		</div>

   <?php include"inc/foot_script.php";?> 
	</body>
</html>