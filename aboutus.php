<?php 
  include('functions.php'); 
?>
<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- JS, Popper.js, and jQuery -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
      <!-- Navbar -->
      <nav class="shadow navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index_ngn.php"><img src="pics\ngnlogoo.png" width="38" height="38">NGN.NET Enterprises</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item active">
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
      <!-- /.Navbar -->

      <div class="jumbotron jumbotron-fluid text-center pr-5 pl-5">
        <h1 class="display-4">Our job is to create links, Human Links</h1>
      </div>

      <div class="py-dot10">
        <!-- Words -->
        <div class="container-fluid mb-2">
          <div class="row">
            <div class="col-sm text-justify mb-2">
              <b>NGN.NET</b> Enterprises is a professional group of experts engaged in
              telecommunications industry, establishing credibility by providing a refreshing attitude
              towards customer service and an excellent alternative to the larger, higher priced installers
              in the locality. Savings are typically between 30% and 40% off the prices charged by
              competitors.
            </div>
            <div class="col-sm text-justify mb-2">
              <b>NGN.NET</b> services both the residential and commercial communities, from
              small jobs to larger projects. With many years combined experience, we are capable of
              handling your communications needs promptly and economically. Top quality products and
              guaranteed workmanship assure your complete satisfaction.
            </div>
          </div>
        </div>

        <div class="container-fluid text-center mb-4">
          <div class="row col-sm card card-body shadow-sm">
            <h5 class="card-title font-weight-bold">Core Competence</h5>
            <p class="card-text">
              Our task is to create and build the local infrastructure to fill a customer need. Such
              infrastructure includes Electronic Communications Engineering Services, Sales and
              Marketing backed-up by the warranty through periodic repair and maintenance.
            </p>
          </div>
        </div>

        <div class="font-weight-bold text-center mb-2">
            <h5 class="card-title font-weight-bold">Corporate Mission</h5>
        </div>

        <div class="container-fluid mb-2">
          <div class="row">
            <div class="col-sm text-justify mb-2">
              We are a communication technology provider committed to giving absolute
              satisfaction to our clients.
            </div>
            <div class="col-sm text-justify mb-2">
              We exist to give quality communication products and services on time and cost
              effectively.
            </div>
            <div class="col-sm text-justify mb-2">
              We are an organization committed to sustain a dynamic work environment that will
              foster and encourage competent and motivated human resources.
            </div>
          </div>
        </div>
        <!-- /.Words -->

        <div class="font-weight-bold text-center">
          <h5 class="card-title font-weight-bold">Corporate Values</h5>
        </div>

        <!-- Cards -->
        <div class="container-fluid mb-4">
          <div class="row">
            <div class="col-6 col-lg-3 d-flex align-items-stretch">
              <div class="card shadow-sm">
                <img class="card-img-top" src="pics\workethics.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Strong Work Ethics</h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-stretch">
              <div class="card shadow-sm">
                <img class="card-img-top" src="pics\growth.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Passion for Growth</h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-stretch">
              <div class="card shadow-sm">
                <img class="card-img-top" src="pics\service.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Relentless Customer Service</h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-stretch">
              <div class="card shadow-sm">
                <img class="card-img-top" src="pics\teamwork.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Sense of Teamwork</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.Cards -->
        
        <div class="text-center controls-top mb-2">
          <h5 class="card-title font-weight-bold">
            <a href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left pr-3"></i></a>
            <span >Companies Served</span>
            <a href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right pl-3"></i></a>
          </h5>
        </div>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="text-center carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->
          <div class="carousel-item active gallery p-3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\adnu.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\biscast.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\bonapharma.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\brtth.png" alt="Card image cap">
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\caleb.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\camnorte.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\castilla.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\cbsua.png" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel-item gallery p-3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\doa.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\doh.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\dranix.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\emb.png" alt="Card image cap">
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\goa.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\honda.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\jep.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\jimmy.png" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <!--/.Second slide-->

          <!--Third slide-->
          <div class="carousel-item gallery p-3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\jurassic.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\mariners.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\mercedes.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\mgb.png" alt="Card image cap">
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\mnwd.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\ncf.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\ncip.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\nfa.png" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <!--/.Third slide-->

          <!--Fourth slide-->
          <div class="carousel-item gallery p-3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\pagibig.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\partido.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\pisay.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\piwad.png" alt="Card image cap">
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\polytrade.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\sss.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\subastil.png" alt="Card image cap">
                </div>
                <div class="col-6 col-md-3 col-lg-3 card border-0 gallery">
                  <img class="img-fluid" src="pics\logos\usi.png" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <!--/.Fourth slide-->
        </div>
        <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
      </div>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>
    </body>
</html>