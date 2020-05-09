<?php 
$title = 'FAQ';
include"inc/head.php";
?>
	<body data-scrolling-animations="true">
		<div class="sp-body">
		
			<header id="this-is-top">
				<?php include"inc/top.php";?>
			</header>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#!"><h1>FAQ</h1></a>
					<div class="pull-right">
						<a href="index.php?ex-Cargos"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="faq.php?ex=Cargo">Faq</a>
					</div>
				</div>
			</div>

			<div class="container-fluid inner-offset">
				          
				<h1 align='center'class=" wow fadeIn" data-wow-delay="0.3s" style='color:#6054c2;font-size:44px;'>
					FAQ <hr/>
				</h1>

				<div class="tab-content inner-offset wow fadeIn" data-wow-delay="0.3s">
					<div class="tab-pane active" id="tab1">
						<div class="row">
							<div class="col-sm-5">
								<img class="full-width" src="img/55op.jpg" alt="Img">
								<br/><br/><br/><br/>
								<img class="full-width" src="img/1op.jpg" alt="Img">
							</div>
							<div class="col-sm-7">
								<p>
									Can I track my shipment online?
                                    <br>
									Yes,<hr/>
									What are the prohibited Items?<br>

									Edible food items, medications, money, herbs, Amunitions, cheques, live remains etc. 
									(call customer service for more information)<hr/>
									Can you deliver all over the World?<br>

									Yes, sure we can <hr/>
									Can I pay for an import from overseas?<br>

									Yes <hr/>
									Where are your offices to pickup or send items from?<br>

									Call support team or our agent to arrange pick up<hr/>
									What are your contact details or customer service Hotlines?<br>
									Phone : <b> <?php echo $site_phone; ?> </b><br/>
									Email: <b> <?php echo $site_email; ?> </b> <hr/>
									Why is my shipment held / delayed?<br>

									Shipment can be held for inspection by government agencies (customs etc).<hr/>
								</p>
								<p>Why is my customs duty high?<br>
								    
								    Customs duty /taxes are calculated by customs and can be revised if a genuine claim for wrong assessment is established.<hr/>
									Why was a wrong HSCODE used for my billing?<br>

									Could be a mistake from customs which can be resolved when consignee writes to customs. Please call Customer 
									service for assistance.<hr/>
									My consignment is due today but I have not received, what happened?<br>

									Could be a flight delay or random customs check.<hr/>
									Can I export a document to any part of the world?<br>

									Yes.<hr/>
									I sent my package via your company but it is yet to be delivered, what can I do?<br>

									Please track online or call our office lines for assistance.<hr/>
									Is it possible to send an item overseas and the receiver pays for the freight cost?<br>

									Yes, but this is a special service. <hr/>
									Held awaiting clearance from customs, what next can I do?<br>

									Please call our office lines for assistance.<br>
									</p>
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