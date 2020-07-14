<!--
  Honor Code:
    This is my own work and I have not received any unauthorized help in completing this. 
    I have not copied from my classmate, friend, nor any unauthorized resource. I am well 
    aware of the policies stipulated in the handbook regarding academic dishonesty. If proven 
    guilty, I won't be credited any points for this endeavor.
-->
<?php 
  include('functions.php');
?>
<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
      <?php if (isset($_SESSION['error_admin'])) { ?>
        <div style='margin-bottom: 0;' class='alert alert-danger text-center'>
            <?php 
              echo $_SESSION['error_admin'];
              unset($_SESSION['error_admin']);
            ?>
        </div>
      <?php } else if (isset($_SESSION['logged_in'])) { ?>
        <div style='margin-bottom: 0;' class='alert alert-success text-center'>
            <?php 
              echo $_SESSION['logged_in'];
              unset($_SESSION['logged_in']);
            ?>
        </div>
      <?php } else if (isset($_SESSION['logged_out'])) { ?>
        <div style='margin-bottom: 0;' class='alert alert-warning text-center'>
            <?php 
              echo $_SESSION['logged_out'];
              unset($_SESSION['logged_out']);
            ?>
        </div>
      <?php } else if (isset($_GET['deleted-account'])) {
        if (isset($_SESSION['deleted_account'])) {
          echo "<div style='margin-bottom: 0;' class='alert alert-warning text-center'>";
          echo $_SESSION['deleted_account'];
          echo "</div>";
          session_destroy();
          unset($_SESSION['user']);
        }
        unset($_SESSION['deleted_account']);
      } ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index_ngn.php"><img src="ngnlogoo.png" width="50" height="50">NGN.NET Enterprises</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto navcenter">
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products and Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>

          <span class="text-light">
            <?php  if (isset($_SESSION['user'])) { ?>
              <?php if ($_SESSION['user']['user_type'] != 'admin') { ?>
                Signed in as:
                <span class="text-green"><?php echo $_SESSION['user']['username']; ?></span>
                <div class="btn-group">
                  <button class="btn btn-secondary btn-light dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
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

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="carousel1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="carousel2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="carousel3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <div class="text-center body-below">
        <div class="jumbotron jumbotron-fluid text-center">
          <h1 class="display-4">We don't just install, we restore!</h1>
          <p class="lead">Our company values the longevity of the quality products and services that we offer.</p>
          <hr class="my-4">
          <p>Had quality projects undertaken around Bicol region, and will continue to do so.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="aboutus.php" role="button">Learn more</a>
          </p>
        </div>

        <div class="card-deck mb-4">
          <div class="card">
            <img class="card-img-top" src="cctv2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">CCTV / IP Surveillance System</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="pabx2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">PABX Installation</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="wireless2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Wireless Transmissions (Towers)</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top responsive" src="fibergrounding.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fiber Optics Conduits and Groundings</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top responsive" src="fiber_two.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fiber Optics Splicing and Installation</h5>
            </div>
          </div>
        </div>
      </div>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>

      <script>
        $('.carousel').carousel({
          interval: 2000;
        })
      </script>
    </body>
</html>