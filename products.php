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
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="products.php">Products and Services</a>
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

      <div class="body-below text-center">
        <div class="card-deck mb-4 mt-4">
          <div class="card">
            <img class="card-img-top" src="firealarm.svg" alt="Card image cap" style="padding: 0% 20% 0% 20%">
            <div class="card-body">
              <h5 class="card-title">Fire Alarm System</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-sm">Read</a>
              <a href="#" class="btn btn-primary btn-sm">Inquire</a>
              <a href="#" class="btn btn-primary btn-sm">Avail</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="network.svg" alt="Card image cap" style="padding: 0% 20% 0% 20%">
            <div class="card-body">
              <h5 class="card-title">Computer Network Cabling</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-sm">Read</a>
              <a href="#" class="btn btn-primary btn-sm">Inquire</a>
              <a href="#" class="btn btn-primary btn-sm">Avail</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="fax.svg" alt="Card image cap" style="padding: 0% 20% 0% 20%">
            <div class="card-body">
              <h5 class="card-title">Business Telephone Systems (PABX)</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-sm">Read</a>
              <a href="#" class="btn btn-primary btn-sm">Inquire</a>
              <a href="#" class="btn btn-primary btn-sm">Avail</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="cctv.svg" alt="Card image cap" style="padding: 0 20% 0 20%">
            <div class="card-body">
              <h5 class="card-title">CCTV Installation and Repair</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-sm">Read</a>
              <a href="#" class="btn btn-primary btn-sm">Inquire</a>
              <a href="#" class="btn btn-primary btn-sm">Avail</a>
            </div>
          </div>
        </div>

        <div class="card-deck mb-4">
          
          <div class="card">
            <img class="card-img-top" src="mic.svg" alt="Card image cap" style="padding: 0 20% 0 20%">
            <div class="card-body">
              <h5 class="card-title">BGM/Paging Systems</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="ethernet.svg" alt="Card image cap" style="padding: 0 20% 0 20%">
            <div class="card-body">
              <h5 class="card-title">Telephone / Telecomm Accessories</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
        </div>

        <div class="card-deck mb-4">
          <div class="card">
            <img class="card-img-top" src="burglar" alt="Card image cap" style="padding: 0 20% 0 20%">
            <div class="card-body">
              <h5 class="card-title">Burglar Alarm System</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="doorlock.svg" alt="Card image cap" style="padding: 0 20% 0 20%">
            <div class="card-body">
              <h5 class="card-title">Door Lock System</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="towers.svg" alt="Card image cap" style="padding: 0 20% 0 20%">
            <div class="card-body"> 
              <h5 class="card-title">Wireless transmission Link System</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
        </div>

        <div class="card-deck mb-4">
          <div class="card">
            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="card-body">
              <h5 class="card-title">Commissioning/O&M of Telecommunication Equipments</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
          <div class="card">
            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="card-body">
              <h5 class="card-title">Solar/Wind Power System</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
          <div class="card">
            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="card-body">
              <h5 class="card-title">Structured Cabling</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
        </div>

        <div class="card-deck mb-4">
          <div class="card">
            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="card-body">
              <h5 class="card-title">Microwave Radio Installation/Antenna Rigging</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
          <div class="card">
            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="card-body">
              <h5 class="card-title">Supply and Installation of Fiber Optic system</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read</a>
              <a href="#" class="btn btn-primary">Inquire</a>
              <a href="#" class="btn btn-primary">Avail</a>
            </div>
          </div>
        </div>
      </div>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">
          Copyright © Scott Leo C. Reganit
          <span class="ml-5">
            Icons made by 
            <a href="https://www.flaticon.com/authors/freepik" title="Freepik" class="text-green">Freepik</a> 
            <a href="https://www.flaticon.com/authors/good-ware" title="Good Ware">Good Ware</a>
            <a href="https://www.flaticon.com/authors/darius-dan" title="Darius Dan">Darius Dan</a>
            <a href="https://www.flaticon.com/authors/vitaly-gorbachev" title="Vitaly Gorbachev">Vitaly Gorbachev</a>
            <a href="https://www.flaticon.com/authors/catkuro" title="catkuro">catkuro</a>
            <a href="https://www.flaticon.com/authors/linector" title="Linector">Linector</a>
            from 
            <a href="https://www.flaticon.com/" title="Flaticon" class="text-green"> www.flaticon.com</a>
          </span>
        </div>
      </footer>
    </body>
</html>