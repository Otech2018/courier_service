		<!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
						<br/>
						LOADING... <br/> <?php echo $site_name; ?>
					</div>
				</div>
			</div>
		<!-- Loader end -->



<div class="container-fluid">
	                <div class="topmenu row">
	                    <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
	                        
	                    </nav>
	                    <nav class="text-right col-sm-3 col-md-3 col-lg-3">
	                        <a href="#"><i class="fa fa-facebook"></i></a>
	                        <a href="#"><i class="fa fa-google-plus"></i></a>
	                        <a href="#"><i class="fa fa-twitter"></i></a>
	                        <a href="#"><i class="fa fa-pinterest"></i></a>
	                        <a href="#"><i class="fa fa-youtube"></i></a>
	                    </nav>
	                </div>
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <a href="index.php" id="logos"><img src="img/<?php echo $site_logo; ?>" height="120"></a>
	                    </div>
	                    <div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
	                        <div class="text-right header-padding">
	                            <div class="h-block"><span>CALL US</span> <?php echo $site_phone; ?> </div>
	                            <div class="h-block"><span>EMAIL US</span> <?php echo $site_email; ?></div>
	                            <div class="h-block"><span>WORKING HOURS</span><?php echo $site_wrk_hrs; ?></div>
	                           
	                            <div class="h-block">
								
								<li class="dropdown" type='none'>
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1 btn-danger btn" href="#">TRACK YOUR ITEM <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="ftrack.php" class='btn btn-danger'> FLIGHT TRACKING</a></li>
									<li><a href="track.php" class='btn btn-success'> SHIPMENT TRACKING</a></li>
									
								</ul>
							</li>
	                            
	                            </div>
	                            <!--<a class="btn btn-success" href="#">GET A FREE QUOTE</a>-->
	                            
	                        </div>
	                    </div>
	                </div>
	                <div id="main-menu-bg"></div>  
	                <a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
	                <nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
							<li><a href="index.php" style='color:<?php if ($title=='HOME'){echo "yellow";}?>;'>HOME</a></li>
							<li><a href="service.php" style='color:<?php if ($title=='Services'){echo "yellow";}?>;'> OUR SERVICE</a></li>
							<li><a href="about.php" style='color:<?php if ($title=='About'){echo "yellow";}?>;'> ABOUT US</a></li>
							
							<li><a href="faq.php?ex=Global" style='color:<?php if ($title=='FAQ'){echo "yellow";}?>;'>  FAQ</a></li>
						<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="#" 
								style='color:<?php if ($title=='Track'){echo "yellow";}?>;'>
								TRACKING <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="ftrack.php">FLIGHT TRACKING</a></li>
									<li><a href="track.php">SHIPMENT TRACKING</a></li>
									
								</ul>
							</li>
							<li><a href="contact.php" style='color:<?php if ($title=='Contact'){echo "yellow";}?>;'>CONTACT US</a></li>
							<li><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </li>
							<!--  ---
							
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="05_services.html">OUR SERVICES <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="05_services.html">OUR SERVICES 1</a></li>
									<li><a href="06_services.html">OUR SERVICES 2</a></li>
									<li><a href="07_services.html">OUR SERVICES 3</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="03_about.html">ABOUT US <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="03_about.html">ABOUT US 1</a></li>
									<li><a href="04_about.html">ABOUT US 2</a></li>
								</ul>
							</li>-->
						
						</ul>
						<div class="search-form-modal transition">
							<form class="navbar-form header_search_form">
								<i class="fa fa-times search-form_close"></i>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn_search customBgColor">Search</button>
							</form>
						</div>
	                </nav>
	                <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
	            </div>