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
            <li class="nav-item active">
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

      <div class="jumbotron jumbotron-fluid text-center pr-5 pl-5">
        <h1 class="display-4">Quality services and products, we provide...</h1>
      </div>

      <div class="py-dot10 text-center">
        <div class="container-fluid mb-4">
          <div class="row">
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\firealarm.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Fire Alarm System</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#firealarm">
                    Read
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="firealarm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Fire Alarm System</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                          Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\network.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Computer Network Cabling</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\cabling.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Structured Cabling</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\mic.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">BGM/Paging Systems</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <!---->
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\fax.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Business Telephone Systems (PABX)</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\ethernet.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Telephone / Telecomm Accessories</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\towers.svg" alt="Card image cap">
                <div class="card-body pt-0"> 
                  <h5 class="card-title">Wireless Transmission Link System</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\energy.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Solar Power System</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <!---->
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\cctv.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">CCTV Installation and Repair</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\roll.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Commissioning/O&M of Telecommunication Equipments</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\dish.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Microwave Radio Installation/Antenna Rigging</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
            <div class="mx-auto col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex align-items-stretch">
              <div class="card shadow-sm mx-auto">
                <img class="card-img-top p-3" src="pics\fibericon.svg" alt="Card image cap">
                <div class="card-body pt-0">
                  <h5 class="card-title">Supply and Installation of Fiber Optic System</h5>
                </div>
                <div class="card-footer pl-0 pr-0">
                  <a href="#" class="btn btn-primary btn-sm">Read</a>
                  <a href="#" class="btn btn-primary btn-sm">Inquire</a>
                  <a href="#" class="btn btn-primary btn-sm">Avail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center text-light" style="background-color: rgba(0, 123, 255, .75);">
        Icons made by 
        <a href="https://www.flaticon.com/authors/freepik" title="Freepik" class="text-green">Freepik</a>, 
        <a href="https://www.flaticon.com/authors/good-ware" title="Good Ware" class="text-green">Good Ware</a>, 
        <a href="https://www.flaticon.com/authors/darius-dan" title="Darius Dan" class="text-green">Darius Dan</a>, 
        <a href="https://www.flaticon.com/authors/vitaly-gorbachev" title="Vitaly Gorbachev" class="text-green">Vitaly Gorbachev</a>, 
        <a href="https://www.flaticon.com/authors/catkuro" title="catkuro" class="text-green">catkuro</a>, 
        <a href="https://www.flaticon.com/authors/linector" title="Linector" class="text-green">Linector</a>, 
        <a href="https://www.flaticon.com/authors/mynamepong" title="mynamepong" class="text-green">mynamepong</a>,
        <a href="https://www.flaticon.com/authors/smalllikeart" title="smalllikeart" class="text-green">smalllikeart</a>
        from 
        <a href="https://www.flaticon.com/" title="Flaticon" class="text-green"> www.flaticon.com</a>
      </div>
      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">
          Copyright © Scott Leo C. Reganit
        </div>
      </footer>
    </body>
</html>