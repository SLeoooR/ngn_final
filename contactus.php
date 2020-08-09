<?php 
  include('functions.php'); 
?>
<html>
    <head>
      <!-- CSS only -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/css/ol.css" type="text/css">
      <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">

      <!-- JS, Popper.js, and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/build/ol.js"></script>
    </head>
    <body>
      <nav class="shadow navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index_ngn.php"><img src="pics\ngnlogoo.png" width="38" height="38">NGN.NET Enterprises</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products and Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
          <span class="text-light">
            <?php  if (isset($_SESSION['user'])) { ?>
              <?php if ($_SESSION['user']['user_type'] != 'admin') { ?>
                Signed in as:
                <span class="text-green"><?php echo $_SESSION['user']['username']; ?></span>
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="inquiries.php">My Inquiries</a>
                    <a class="dropdown-item" href="account.php">Edit account</a>
                    <a class="dropdown-item" href="index_ngn.php?logout='1'" style="color: red;">Logout</a>
                  </div>
                </div>
              <?php } else { ?>
                Signed in as:
                <span class="text-green"><?php echo $_SESSION['user']['username']; ?></span>
                <div class="btn-group">
                  <button class="btn btn-secondary btn-light dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="account.php">Edit account</a>
                    <a class="dropdown-item" href="index_ngn.php?logout='1'" style="color: red;">Logout</a>
                  </div>
                </div>
              <?php } ?>
            <?php } else { ?>
            <a href="login.php">
              <button class="btn btn-light btn-outline-primary my-2 my-sm-0">
                Login
              </button>
            </a>
            <?php } ?>
          </span>
        </div>
      </nav>

      <div id="map" class="shadow-lg" style="width: 100%; height: 60%;">
        <div id="popup" class="ol-popup">
            <a href="#" id="popup-closer" class="ol-popup-closer"></a>
            <div id="popup-content"></div>
        </div>
      </div>

      <div class="text-center py-dot10 row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 px-4 py-5" style="background-color: rgba(233, 236, 239, .75);">
          <h1 class="display-5">Contact Us</h1>
          <hr>
          <p class="lead">(054) 473-7373 <br> 0915-687-7181 <br> 0918-428-7063</p>
          <p class="lead">Door 4 Pavilion 7, Panganiban Drive, Naga City</p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 px-4 py-5" style="background-color: rgba(233, 236, 239, .50);">
          <h1 class="display-5">Visit Us</h1>
          <hr>
          <a href="https://www.facebook.com/ngn.net.ph/" target="_blank"><img src="pics\facebook.svg" width="50" height="50"></a>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 px-4 py-5 mx-auto" style="background-color: rgba(233, 236, 239, .25);">
          <h1 class="display-5">Tell Us</h1>
          <hr>
          <form>
            <div class="row">
              <div class="col pr-1">
                <input id="field1" class="mb-1 form-control" type="text" required name="Name" placeholder="Name *" value="" />
                <input id="field2" class="mb-1 form-control" type="text" required name="Email" placeholder="Email *" value="" />
                <input id="field3" class="mb-1 form-control" type="text" name="Subject" placeholder="Subject" value="" />
              </div>
              <div class="col pl-1 d-flex align-items-stretch">
              <textarea id="field4" class="mb-1 form-control" style="resize: none;" name="Message" placeholder="Message" value=""></textarea>
              </div>
            </div>
            <button type="button" class="btn-sm btn-primary">Send</button>
          </form>
        </div>
      </div>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>

      <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
      <script>
        var map = new ol.Map({
          target: 'map',
          layers: [
            new ol.layer.Tile({
              source: new ol.source.OSM()
            })
          ],
          view: new ol.View({
            center: ol.proj.fromLonLat([123.197815, 13.621391]),
            zoom: 18
          })
        });

        var layer = new ol.layer.Vector({
          source: new ol.source.Vector({
              features: [
                  new ol.Feature({
                      geometry: new ol.geom.Point(ol.proj.fromLonLat([123.197815, 13.621391]))
                  })
              ]
          })
        });
        map.addLayer(layer);

        var container = document.getElementById('popup');
        var content = document.getElementById('popup-content');
        var closer = document.getElementById('popup-closer');

        var overlay = new ol.Overlay({
            element: container,
            autoPan: true,
            autoPanAnimation: {
                duration: 250
            }
        });
        map.addOverlay(overlay);

        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        };

        map.on('singleclick', function (event) {
          if (map.hasFeatureAtPixel(event.pixel) === true) {
              var coordinate = event.coordinate;

              content.innerHTML = 'We are located here!';
              overlay.setPosition(coordinate);
          } else {
              overlay.setPosition(undefined);
              closer.blur();
          }
        });

        content.innerHTML = 'We are located here!';
        overlay.setPosition(ol.proj.fromLonLat([123.197815, 13.621391]));
      </script>
    </body>
</html>