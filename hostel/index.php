<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sri Sai Duga Men's Hostel</title>
		<meta name="description" content="Working men's hostel at Anjiah Nagar, Gachibowli just 4kms. away from Cyber Towers, Hyderabad on Gachibowli Miyapur Road. It has semi finished furniture, spacious rooms. Food is homely. All at decent price.">
		<meta name="keywords" content="Mens Hostel, Gachibowli Hyderabad, Working Men's, Working Mens, Men's Hostel, Gachibowli, Hyderabad, Anjaiah Nagar">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--Bootstrap-->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<style>

			#map-canvas {
				margin: 0px;
				padding: 10px;
				height: 60%;
			}

			/* BOOTSTRAP 3.x GLOBAL STYLES */
			body {
			  padding-bottom: 40px;
			  color: #5a5a5a;
			  padding-top: 50px;
			  font-size:14px;
			}

			/* CUSTOMIZE THE NAVBAR */

			/* Special class on .container surrounding .navbar, used for positioning it into place. */
			.navbar-wrapper {
			  position: absolute;
			  top: 0;
			  left: 0;
			  right: 0;
			  z-index: 10;
			}

			/* CUSTOMIZE THE CAROUSEL */

			/* Carousel base class */
			.carousel .carousel-indicators {
				z-index: 3;
			}

			.carousel {
			  margin-bottom: 25px;
			}
			/* Since positioning the image, we need to help out the caption */
			.carousel-caption {
			  z-index: 3;
			}

			/* Declare heights because of positioning of img element */
			.carousel .item {
			  height: 400px;
			  background-color:#555;
			}
			.carousel img {
			  position: absolute;
			  top: 0;
			  left: 0;
			  min-height: 400px;
			}

			/* RESPONSIVE CSS */

			@media (min-width: 768px) {

			  /* Navbar positioning foo */
			  .navbar-wrapper {
				margin-top: 20px;
				margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
			  }
			  /* The navbar becomes detached from the top, so we round the corners */
			  .navbar-wrapper .navbar {
				border-radius: 4px;
			  }

			  /* Bump up size of carousel content */
			  .carousel-caption p {
				margin-bottom: 20px;
				font-size: 21px;
				line-height: 1.4;
			  }

			}
		</style>

		<!-- GOOGLE MAP-->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
		<script>
			var map;
			function initialize() {
			  var mapOptions = {
				zoom: 18,
				center: new google.maps.LatLng(17.450483,78.366078),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			  };
			  map = new google.maps.Map(document.getElementById('map-canvas'),
				  mapOptions);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>

	<body>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>

		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar navbar-inverse navbar-fixed-top">

					<div class="navbar-header">
						<a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="navbar-brand" href="#">Sri Sai Durga Men's Hostel</a>
					</div>

					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="#map-canvas">Contact</a></li>
						</ul>
					</div>
				</div>
			</div><!-- container -->
		</div><!-- navbar wrapper -->

		</br>

	<div class="container-fluid">
		<div class=row>
			<!-- GRID -->
			<div class="col-md-12">
				<!-- GRID/SUB1 -->
				<div class="col-md-6 col-md-offset-1">
					<!-- FACILITIES -->
					<div class="panel panel-info">
						<div class="panel-heading"><h4>Facilities</h4></div>
						<div class="panel-body">
							<ul>
								<li>Tasty homely north and south indian meals: Breakfast, lunch, dinner</li></br>
								<li>Mineral drinking water</li></br>
								<li>Internet connectivity: 24*7 fast Wi-fi all around the hostel</li></br>
								<li>TV with cable connection in all rooms</li></br>
								<li>Clean, well ventilated and spacious rooms with locker and attached wash-rooms</li></br>
								<li>Hot water/Geyser</li></br>
								<li>Safe parking for vehicles</li></br>
								<li>Laundry service</li></br>
							</ul>
						</div>
					</div>

					<div class="col-md-12 ">
						<!-- GRID/SUB1/SUB1 -->
						<!-- Carousel -->
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
								<li data-target="#myCarousel" data-slide-to="4"></li>
								<li data-target="#myCarousel" data-slide-to="5"></li>
								<li data-target="#myCarousel" data-slide-to="6"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="pics/entrance.JPG" alt="entrance" class="img-responsive">
									<div class="container">
										<div class="carousel-caption">
											<p>Entrance</p>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="pics/parkingspc.JPG" alt="parking" class="img-responsive">
									<div class="container">
										<div class="carousel-caption">
											<p>Parking</p>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="pics/mess.JPG" alt="mess" class="img-responsive">
									<div class="container">
										<div class="carousel-caption">
											<p>Mess</p>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="pics/1floor.JPG" alt="first_floor" class="img-responsive">
									<div class="container">
										<div class="carousel-caption">
											<p>First Floor</p>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="pics/2floor.JPG" alt="second_floor" class="img-responsive">
									<div class="container">
										<div class="carousel-caption">
											<p>Second Floor</p>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="pics/3floor.JPG" alt="third_floor" class="img-responsive">
									<div class="container">
										<div class="carousel-caption">
											<p>Third Floor</p>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="pics/terrace.JPG" alt="terrace" class="img-responsive">
									<div class="container">
										<div class="carousel-caption">
											<p>Terrace</p>
										</div>
									</div>
								</div>
							</div>
								<!-- Controls -->
								<a class="left carousel-control" href="#myCarousel">
									<span class="icon-prev"></span>
								</a>
								<a class="right carousel-control" href="#myCarousel">
									<span class="icon-next"></span>
								</a>
						</div>
								<!-- /.carousel -->

					</div>
				</div>

				<!-- GRID/SUB2 -->
				<div class="col-md-4">
					<!-- ROOM INFORMATION -->
					<div class="panel panel-info">
						<div class="panel-heading"><h4>Room Information</h4></div>
							<table class="table table-bordered">
						<table class="table table-bordered">
							<tr>
							  <th>Room No.</th>
							  <th>Floor</th>
							  <th>Sharing</th>
							  <th>Price (Rs.)</th>
							</tr>
							<tr>
							<td>202</td>
							  <td>Ground</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>203</td>
							  <td>First</td>
							  <td>4</td>
							  <td>4300</td>
							</tr>
							<tr>
							  <td>204</td>
							  <td>First</td>
							  <td>4</td>
							  <td>4300</td>
							</tr>
							<tr>
							  <td>205</td>
							  <td>First</td>
							  <td>4</td>
							  <td>4300</td>
							</tr>
							<tr>
							  <td>206</td>
							  <td>First</td>
							  <td>4</td>
							  <td>4300</td>
							</tr>
							<tr>
							  <td>207</td>
							  <td>Second</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>208</td>
							  <td>Second</td>
							  <td>2</td>
							  <td>5500</td>
							</tr>
							<tr>
							  <td>209</td>
							  <td>Second</td>
							  <td>2</td>
							  <td>5500</td>
							</tr>
							<tr>
							  <td>210</td>
							  <td>Second</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>211</td>
							  <td>Second</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>212</td>
							  <td>Second</td>
							  <td>2</td>
							  <td>5500</td>
							</tr>
							<tr>
							  <td>213</td>
							  <td>Second</td>
							  <td>2</td>
							  <td>5500</td>
							</tr>
							<tr>
							  <td>214</td>
							  <td>Second</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>215</td>
							  <td>Third</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>216</td>
							  <td>Third</td>
							  <td>2</td>
							  <td>5500</td>
							</tr>
							<tr>
							  <td>217</td>
							  <td>Third</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>218</td>
							  <td>Third</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>219</td>
							  <td>Third</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
							<tr>
							  <td>220</td>
							  <td>Third</td>
							  <td>3</td>
							  <td>4700</td>
							</tr>
						</table>
							</table>
					</div>
				</div>
			</div>
		</div>

			<hr>

			<!-- COMMENTING -->
			<div class=row>
				<div class="col-md-10 col-md-offset-1">
					<h4><strong>Reviews</strong></h4>
					<div class="fb-comments" data-href="http://www.menzhostel.in/" data-numposts="5" data-colorscheme="light"></div>
				</div>
			</div>

			<hr>

			<!-- MAP -->
			<div id="map-canvas"></div>

			<hr>

			<!-- ADDRESS -->
			<div class=row>
				<div class="col-md-10 col-md-offset-1">
					<address>
					  <strong>Sri Sai Durga Men's Hostel</strong><br>
					  House No. 1-60/30/199 & 200/136<br>
					  Gachibowli, Hyderabad<br>
					  <abbr title="Phone">P:</abbr> +91-9701078814
					</address>
				</div>
			</div>

			<!-- FOOTER -->
			<div class=row>
				<div class="col-md-10 col-md-offset-1">
					<footer>
						<div class="fb-like" data-href="http://www.menzhostel.in/" data-layout="button" data-action="recommend" data-show-faces="true" data-share="true"></div>
						<div class="fb-like" data-href="http://www.menzhostel.in/" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
							</br>
							<center>Design by:<a rel="author" href="https://plus.google.com/+RajdeepBarman?rel=author">&nbsp;Rajdeep</center>
						</footer>
				</div>
			</div>
	</div>

        <script type='text/javascript' src="js/jquery.min.js"></script>
		<script type='text/javascript' src="js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function(){
				$('.carousel').carousel();
				});
		</script>

	</body>
</html>
