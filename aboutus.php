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
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index_ngn.php"><img src="ngnlogoo.png" width="50" height="50">NGN.NET Enterprises</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto navcenter">
            <li class="nav-item">
              <a class="nav-link active" href="aboutus.php">About Us</a>
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
                <?php echo $_SESSION['user']['username']; ?>
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

      <div class="jumbotron jumbotron-fluid text-center">
        <h1 class="display-4">Our job is to create links, Human Links</h1>
      </div>

      <div class="body-below">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm text-justify">
              <b>NGN.NET</b> Enterprises is a professional group of experts engaged in
              telecommunications industry, establishing credibility by providing a refreshing attitude
              towards customer service and an excellent alternative to the larger, higher priced installers
              in the locality. Savings are typically between 30% and 40% off the prices charged by
              competitors.
            </div>
            <div class="col-sm text-justify">
              <b>NGN.NET</b> services both the residential and commercial communities, from
              small jobs to larger projects. With many years combined experience, we are capable of
              handling your communications needs promptly and economically. Top quality products and
              guaranteed workmanship assure your complete satisfaction.
            </div>
          </div>
        </div>

        <br>

        <div class="container-fluid text-center">
          <div class="row col-sm card card-body">
            <h5 class="card-title font-weight-bold">Core Competence</h5>
            <p class="card-text">
              Our task is to create and build the local infrastructure to fill a customer need. Such
              infrastructure includes Electronic Communications Engineering Services, Sales and
              Marketing backed-up by the warranty through periodic repair and maintenance.
            </p>
          </div>
        </div>

        <div class="font-weight-bold text-center">
            <h5 class="card-title font-weight-bold">Corporate Mission</h5>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-sm text-justify">
              We are a communication technology provider committed to giving absolute
              satisfaction to our clients.
            </div>
            <div class="col-sm text-justify">
              We exist to give quality communication products and services on time and cost
              effectively.
            </div>
            <div class="col-sm text-justify">
              We are an organization committed to sustain a dynamic work environment that will
              foster and encourage competent and motivated human resources.
            </div>
          </div>
        </div>

        <div class="font-weight-bold text-center">
          <h5 class="card-title font-weight-bold">Corporate Values</h5>
        </div>

        <div class="card-deck mb-4">
          <div class="card">
            <img class="card-img-top" src="workethics.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Strong Work Ethics</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="growth.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Passion for Growth</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="service.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Relentless Customer Service</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="teamwork.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sense of Teamwork</h5>
            </div>
          </div>
        </div>

        <div class="font-weight-bold text-center">
          <h5 class="card-title font-weight-bold">Projects Undertaken</h5>
        </div>
        <img src="projects.png" class="mb-4" style="max-width: 100%; max-height: auto;">
      </div>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>
    </body>
</html>