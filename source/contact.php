<!DOCTYPE html>
<html>
<head>
    <title>Contact Vendor E-commerce</title>
            <link rel="stylesheet" href="../css/templatemo-style.css">

</head>
<body>




<?php include "header.php" ?>
<?php include "sidebar.php" ?>


<div style="margin: 3% 0 0;background: #202020">
<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
        <h2 align="center"  style="font-size: 55px;color: white">CONTACT <span style="color: #28A6E8;      font-family: 'Open Sans', sans-serif;">Vendor E-commerce</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="../login-system/mail.php" method="post">
    						<label style="color: white">NAME</label>
    						<input name="fullname" type="text" class="form-control" id="fullname" required>
   						  	
                            <label style="color: white">EMAIL</label>
    						<input style="margin-left: -0.4%" name="email" type="email" class="form-control" id="email" required>

                            <label style="color: white">Subject</label>
                            <input name="subject" type="text" class="form-control" id="subject" required>
   						  	
                            <label style="color: white">MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message" required></textarea>
    						
                            <input type="submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p style="font-weight: bold;font-size: 20px;color: #00FFFF;text-align: right;">Any Queston ?</p>
    						<p class="address-content">Share Your Suggestions</p>
    						<label style="color: white;font-size: 20px"><b> OUR ADDRESS</b> </label>
    						<p style="color: white"><i class="fa fa-phone"></i> <a style="color: white" href="tel:+8801718339135">+2348045672211</a></p>
    						<p style="color: white"><i class="fa fa-envelope-o"></i> support@vendorecommerce.com</p>
    						<p style="color: white"><i class="fa fa-map-marker"></i> No 82 Gibiya Street, Area 11, Garki, Abuja</p>
    					</address>
    					<!--<ul class="social-icon">
    						<li><h4 style="color: white">WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A" class="fa fa-youtube"></a></li>
    					</ul>-->
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

        </div>

<?php include "address.php" ?>

<?php include "footer.php" ?>

</body>
</html>
