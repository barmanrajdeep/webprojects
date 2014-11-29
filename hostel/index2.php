<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Men's Hostel - Gachibowli, Hyderabad</title>
    <meta name="description" content="Men's Hostel at Gachibowli-Miyapur Road. Lankmark-Jayabheri Enclave, Anjaiah Nagar">
    <meta name="keywords" content="Mens Hostel at Gachibowli Miyapur Road, Hostel Gachibowli Hyderabad, Working Men's, Working Mens, Men's Hostel, Gachibowli, Hyderabad, Anjaiah Nagar, Kothaguda Mens Hostel">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet">
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
    <div class="container">
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
    </div>

  </body>
</html>
