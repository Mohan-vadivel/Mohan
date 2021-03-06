<?php
	  require_once('autoload.php');
	  if(isset($_POST['name'])){
		  $name		=	$_POST['name'];
		  $email	=	$_POST['email'];
		  $subject	=	$_POST['subject'];
		  $message	=	$_POST['message'];
		  $insert_query	=	"insert into contact_form(`name`,`email`,`subject`,`message`) values ('".$name."', '".$email."','".$subject."','".$message."')";
		  $db_obj->ExecuteQuery($insert_query);
	  }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Just another WordPress site">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RPG CONTRACTORS & BUILDERS</title>
	
	<link rel='stylesheet' id='contact-form-7-css'  href='assets/css/styles.css?ver=4.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css-css'  href='assets/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css'  href='assets/css/font-awesome.min.css?ver=4.12' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-flaticon-css'  href='assets/css/flaticon.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-animate-css'  href='assets/css/animate.min.css?ver=1.0' type='text/css' media='all' />
	<!--<link rel='stylesheet' id='drill-slick-css'  href='assets/css/slick.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='owl.carousel.css-css'  href='assets/css/owl.carousel.css?ver=1.3.3' type='text/css' media='all' />
	<link rel='stylesheet' id='owl.theme.css-css'  href='assets/css/owl.theme.css?ver=1.3.3' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-lightbox-css'  href='assets/css/lightbox.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='linearicons-css'  href='assets/css/linearicons.css?ver=1.0.0' type='text/css' media='all' />-->
	<link rel='stylesheet' id='drill-raleway-font-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A300%2C400%2C500%2C600%2C700%2C800%2C900&#038;ver=4.6.10' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
	<link rel='stylesheet' id='drill-main-css-css'  href='assets/css/style_1.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-main-css-css'  href='assets/css/custom.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-responsive-css-css'  href='assets/css/responsive.css?ver=1.0' type='text/css' media='all' />
	
	<link rel='stylesheet' id='drill-root-css-css'  href='assets/css/main_style.css?ver=4.6.10' type='text/css' media='all' />
	
	
	<!--<script src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>-->
	
	<script type='text/javascript' src='assets/js/jquery.js?ver=1.12.4'></script>
	

</head>
<body>
	<!-- FIXED MENU BAR START -->
	<!-- Index Page Layout -->
	<!--
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
				<div class="object" id="object_five"></div>
				<div class="object" id="object_six"></div>
				<div class="object" id="object_seven"></div>
				<div class="object" id="object_eight"></div>
				<div class="object" id="object_big"></div>
			</div>
		</div>
	</div>-->
	
	<header>
		<?php include 'header.php';?>
	</header>	  
	  
	<div class="container-fluid drill-wrapper">
		<div class="row">
			<!-- HEADER -->
			<div class="container-fluid drill-other-header" style="background: url(assets/images/contact_bg.jpg) no-repeat top center fixed; background-size: cover;">
				<div class="row">
					<div class="container other-header-content">
						<ul id="crumbs" class="drill-track">
							<li><a href="index.html" class="drill-txt-p">home</a></li>
							<li><a href="contact.html" class="drill-txt-p"> &nbsp;Contact us</a> </li>
						</ul>
						<div class="drill-txt-lg">
							<h2> Contact us </h2>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER END -->
			<div class="clr section-divider"></div>
			
			<!--<div class="container drill-price">
				<div class="drill-txt-lg dtl-center title_bg_content price">
					<h2 class=""> OUR CREW </h2>
				</div>
				<div class="row text-center">
					<P>The Espouser have successfully Executing  several feats  in and around Chennai. The management team of RPG CONTRACTORS & BUILDERS  has a right combine of young and experienced Professionals with a wonderful exposure to the core and complimentary areas of business. </P>
				</div>
			</div>-->
			<!-- DRILL-PRICE END -->			
			
			<div class="container">
				<div class="row">
					<div class="contact-details">
						<div class="col-md-4 col-sm-4 col-xs-12 address-box detail-box">
							<div class="row">
								<div class="col-md-3 col-sm-12 col-xs-12">
									<span class="contact-icon">
										<i class="fa fa-map-marker"></i>
									</span>
								</div>
								<div class="col-md-9 col-sm-12 col-xs-12">
									<h4>Office address</h4>
									<p>372, 2nd Floor, 10th Cross Street</p>
									<p>Near 200ft, Radial road and Lake,</p>
									<p>Viduthalai Nagar, Kovilambakkam</p>
									<p>Chennai, Tamil Nadu- 600 129</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 phone-box detail-box">
							<div class="row">
								<div class="col-md-3 col-sm-12 col-xs-12">
									<span class="contact-icon">
										<i class="fa fa-phone"></i>
									</span>
								</div>
								<div class="col-md-9 col-sm-12 col-xs-12">
									<h4>Call ( 24X7 )</h4>
									<p>Land Line: (044) 486 111 88</p>
									<p>Mobile : (+91) 902 512 1212</p>
									<p>Mobile : (+91) 735 801 5333</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 mail-box detail-box">
							<div class="row">
								<div class="col-md-3 col-sm-12 col-xs-12">
									<span class="contact-icon">
										<i class="fa fa-envelope"></i>
									</span>
								</div>
								<div class="col-md-9 col-sm-12 col-xs-12">
									<h4>E-Mail address</h4>
									<p><a href="mailto:rpg@rpgbuilders.in">rpg@rpgbuilders.in</a></p>
									<p><a href="mailto:rpgbuilders1188@gmail.com">rpgbuilders1188@gmail.com</a></p>
									<p>&nbsp;</p>
								</div>
							</div>
						</div>
					</diV>
				</div>
			</diV>
			<div class="clr"></div>
			<!--<div class="clr section-divider"></div>-->
			
			<div id="page" class="container">
				<div class="row">
					<div class="col-md-6">
						<!--<div class="map_bg">
							<div id="map"></div>
						</div>-->
						<div class="map_bg" style="width: 100%">
							<iframe width="100%" height="350" src="https://maps.google.com/maps?width=100%&amp;height=350&amp;hl=en&amp;q=%23372%2C%20Second%20floor%2C%2C%2010%20th%20cross%20street%2C%20Viduthalai%20Nagar%2C%20Near%20200ft.%20Radial%20road%20and%20Lake%2C%20Kovilambakkam%2C%20S.Kolathur%2C%20Viduthalai%20Nagar%2C%20Kovilambakkam%2C%20Chennai%2C%20Tamil%20Nadu%20600129+(RPG%20Contractors%20%26%20Builders%20Pvt.%20Ltd.%2C)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
						</iframe></div><br />
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="contact_bg">
								<h5 class="form_heading text-center"> get in touch</h5>
								<form method="post"  id="contact_form" role="form" class="form" name="contact_form">
										<div class="row">
											<div class="col-md-6 input_space">
												<input name="name" id="name" class="input-md form-control" placeholder="Name *" maxlength="100" required="" type="text">
											</div>
											<div class="col-md-6 input_space">
												<input name="email" id="email" class="input-md form-control" placeholder="Email *" maxlength="100" required="" type="text" pattern="[\w.]+@\w+\.[A-Za-z]{2,3}">
											</div>
										</div>
										<div class="input_space">
											<input name="subject" id="subject" class="input-md form-control" placeholder="Subject" maxlength="100" required="" type="text">
										</div>
										<div class="input_space">
											<textarea name="message" id="message" class="input-md form-control" rows="5" placeholder="Message" maxlength="400"></textarea>
										</div>
										<div class="pull-right mrg_0">
											<button type="submit" href="#" class="btn sub_btn"> Send </button>
										</div>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="clr section-divider"></div>
			<footer>
				<?php include 'footer.php';?>
			</footer>
		</div>
	</div>
	
	
	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
	
	<!--
<script type="text/javascript">
	var locations = [
		["<div class='lms_map_infowindow'><h4>RPG Contractors & Builders Pvt. Ltd</h4><p>No:372, 2nd Floor, 10th Cross Street,<br>Viduthalai Nagar, Kovilambakkam,<br>Chennai &ndash; 600 117<br>Phone : 044-4861 1188<br>Email : <a href='mailto:rpg@rpgbuilders.in'>rpg@rpgbuilders.in </a></p></div>",  12.948013,80.200493, ],
	];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: new google.maps.LatLng(12.948013,80.200493),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow();

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			url: locations[i][4]
		});

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}	
</script>

	
<script>
$(document).ready(function(){
	//g.map mouse cursor
	$('.map_bg').click(function () {
		$('.map_bg #map').css("pointer-events", "auto");
	});
	
	$( ".map_bg" ).mouseleave(function() {
	  $('.map_bg #map').css("pointer-events", "none"); 
	});
});
</script>-->
	
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"></div>
	
	<script type='text/javascript' src="assets/js/jquery.1.10.2.js"></script>
	<script type='text/javascript' src="assets/js/bootstrap.3.0.3.min.js"></script>
	
	<!--<script type='text/javascript' src='assets/js/bootstrap.min.js?ver=3.3.5'></script>-->
	<script type='text/javascript' src='assets/js/wow.min.js?ver=1.1.2'></script>
	<script type='text/javascript' src='assets/js/custom.js?ver=1.1.2'></script>
	
</body>
</html>