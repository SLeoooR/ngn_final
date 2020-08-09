<?php 
  include('functions.php');

  if (!isLoggedIn()) {
    $_SESSION['error_logged_in'] = "You must log in first";
	header('location: login.php');
  }
  if (!isAdmin()){
    $_SESSION['error_admin'] = "The page you accessed is for admin only.";
    header('location: index_ngn.php');
  }
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
      <?php if (isset($_SESSION['success'])) { ?>
        <div style='margin-bottom: 0;' class='alert alert-success text-center'>
            <?php 
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            ?>
        </div>
      <?php } ?>
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

      <div class="jumbotron jumbotron-fluid text-center">
        <h1 class="display-4">Admin Page</h1>
      </div>

      <div class="py-dot10">
        <h2 class="text-center">Users Table</h2>
        <table class="table text-center">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>User Type</th>
                  <th>Action</th>
              </tr>
            </thead>
            <?php 
            $sql = "SELECT * FROM users";
            $result = $db->query($sql);
    
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td width='20%'>". $row["id"] . "</td>";
                    echo "<td width='20%'>". $row["username"] . "</td>";
                    echo "<td width='20%'>". $row["email"] . "</td>";
                    echo "<td width='20%'>". $row["user_type"] . "</td>";
                    echo "<td width='20%''>";
                    echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
      </div>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>
    </body>
</html>