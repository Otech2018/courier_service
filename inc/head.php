<?php 
include"inc/ot.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $site_name." | ". $title;?></title>
        <link rel="shortcut icon" href="img/<?php echo $site_logo; ?>" />
        <link href="css/master.css" rel="stylesheet">
       
		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all"   <?php if($site_color =='red'){ echo "data-default-color='true'";} ?>  />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" <?php if($site_color =='light_blue'){ echo "data-default-color='true'";} ?> />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" <?php if($site_color =='orange'){ echo "data-default-color='true'";} ?> />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all"  <?php if($site_color =='green'){ echo "data-default-color='true'";} ?> />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all"  <?php if($site_color =='blue'){ echo "data-default-color='true'";} ?>   />
        
        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	<style>
	.bg-image{
		
		background-image:url('img/1bg.jpg');
	}
	</style>
    </head>