<!DOCTYPE html>
<html data-style-switcher-options="{'borderRadius': '0', 'changeLogo': false, 'colorPrimary': '#E04622', 'colorSecondary': '#EEAB26', 'colorTertiary': '#EAEFF3', 'colorQuaternary': '#080808'}">
	
<!-- Mirrored from www.okler.net/previews/porto/9.8.0/demo-construction-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2022 16:06:18 GMT -->
		  <?php 
          include 'head.php';
            ?>

	</head>
	<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

		<div class="body">
			  <?php 
          include 'header.php';
            ?>
			<div role="main" class="main">


				<div class="container pt-4 pb-5 pb-sm-0 my-5">
					<div class="row pb-2 mb-5">
						<div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
							<div class="row">
								<div class="col-auto">
									<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">CALL US</h3>
									<a href="tel:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
										<img width="23" height="23" src="img/demos/construction/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
										(800) 123-4567
									</a>
								</div>
								<div class="col-auto">
									<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">SEND AN EMAIL</h3>
									<a href="https://www.okler.net/cdn-cgi/l/email-protection#daeaebe8e9eeefecede2e3" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
										<img width="23" height="23" src="img/demos/construction/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
										<span class="__cf_email__" data-cfemail="a5d5cad7d1cae5c6cacbd6d1d7d0c6d1cccacb8bc6cac8">[email&#160;protected]</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1600">
							<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">SEND AN EMAIL</h3>
							<span class="d-flex align-items-center text-color-dark font-weight-bold text-3-5">
								<img width="23" height="23" src="img/demos/construction/icons/location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
								12345 Porto Blvd. | Suite 1500 | Los Angels, California 90000
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400">
							<h2 class="font-weight-bold text-color-dark text-6 mb-0">Send Us a Message</h2>
							<p class="text-3-5 font-weight-light mb-5-5">Contact us or give us a call to discover how we can help.</p>
							<form class="contact-form form-style-3" action="https://www.okler.net/previews/porto/9.8.0/php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
							
								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								
								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-3-5" name="name" placeholder="Your Name" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-3-5" name="email" placeholder="Your E-mail Address" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-3-5" name="subject" placeholder="Subject" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-3-5" name="message" placeholder="Message" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button type="submit" class="custom-view-more d-inline-flex align-items-center btn btn-primary font-weight-semibold rounded-0 text-3-5 btn-px-4 btn-py-2" data-loading-text="Loading...">
											Submit
											<img width="27" height="27" src="img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light ms-2'}" />
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1800">
							<h2 class="font-weight-bold text-color-dark text-6 mb-0">Corporate Headquarters</h2>
							<p class="text-3-5 font-weight-light mb-5-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<div id="googlemaps" class="google-map m-0" style="min-height: 450px;"></div>
						</div>
					</div>
				</div>

				<div class="position-relative pb-5 d-none d-xl-block">
					<div class="position-absolute transform3dy-n50 left-0">
						<div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
							<div class="custom-square-1 bg-primary mt-0 mb-5"></div>
						</div>
					</div>
				</div>

			</div>

			  <?php 
          include 'footer.php';
            ?>
		</div>

		<a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="master/less/skin-construction.less" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher"><i class="fas fa-cogs"></i><div class="style-switcher-tooltip"><strong>Style Switcher</strong><p>Check out different color options and styles.</p></div></a>
		
		<a class="envato-buy-redirect" href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Buy Porto"><i class="fas fa-shopping-cart"></i></a>
		<a class="demos-redirect" href="index.html#demos" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Demos"><img src="img/icons/demos-redirect.png" class="img-fluid" /></a>
		

		<!-- Vendor -->
		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			function initializeGoogleMaps() {
				// Map Markers
				var mapMarkers = [{
					address: "New York, NY 10017",
					html: "<strong>Corporate Headquarters</strong><br>New York, NY 10017",
					icon: {
						image: "img/demos/construction/pin.png",
						iconsize: [26, 46],
						iconanchor: [12, 46]
					},
					popup: true
				}];

				// Map Initial Location
				var initLatitude = 40.75198;
				var initLongitude = -73.96978;

				// Map Extended Settings
				var mapSettings = {
					controls: {
						draggable: (($.browser.mobile) ? false : true),
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: true,
						streetViewControl: true,
						overviewMapControl: true
					},
					scrollwheel: false,
					markers: mapMarkers,
					latitude: initLatitude,
					longitude: initLongitude,
					zoom: 16
				};

				var map = $('#googlemaps').gMap(mapSettings),
					mapRef = $('#googlemaps').data('gMap.reference');

				// Create an array of styles.
				var mapColor = "#cfa968";

				var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

				var styledMap = new google.maps.StyledMapType(styles, {
					name: 'Styled Map'
				});

				mapRef.mapTypes.set('map_style', styledMap);
				mapRef.setMapTypeId('map_style');
			}

			// Initialize Google Maps when element enter on browser view
			theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>



	</body>

<!-- Mirrored from www.okler.net/previews/porto/9.8.0/demo-construction-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2022 16:06:19 GMT -->
</html>