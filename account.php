<!--
  Honor Code:
    This is my own work and I have not received any unauthorized help in completing this. 
    I have not copied from my classmate, friend, nor any unauthorized resource. I am well 
    aware of the policies stipulated in the handbook regarding academic dishonesty. If proven 
    guilty, I won't be credited any points for this endeavor.
-->
<?php 
  include('functions.php'); 

  if (!isLoggedIn() && isset($_GET['deleted-account'])) {
    $_SESSION['error_logged_in'] = "You must log in first";
    header('location: login.php');
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
      <?php if (isset($_GET['email-validity'])) {
        if (isset($_SESSION['email_validity'])) {
          echo "<div style='margin-bottom: 0;' class='alert alert-danger text-center'>";
          echo $_SESSION['email_validity'];
          echo "</div>";
        }
        unset($_SESSION['email_validity']);
      ?>
      <?php } else if (isset($_GET['updated-account'])) {
        if (isset($_SESSION['updated_account'])) {
          echo "<div style='margin-bottom: 0;' class='alert alert-warning text-center'>";
          echo $_SESSION['updated_account'];
          echo "</div>";
        }
        unset($_SESSION['updated_account']);
      ?>
      <?php } else if (isset($_GET['updated-password'])) { 
        if (isset($_SESSION['updated_password'])) {
          echo "<div style='margin-bottom: 0;' class='alert alert-warning text-center'>";
          echo $_SESSION['updated_password'];
          echo "</div>";
        }
        unset($_SESSION['updated_password']);
      ?>
      <?php } else if (isset($_GET['error-password'])) {
        if (isset($_SESSION['error_password'])) {
          echo "<div style='margin-bottom: 0;' class='alert alert-dangertext-center'>";
          echo $_SESSION['error_password'];
          echo "</div>";
        }
        unset($_SESSION['error_password']);
      } ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index_ngn.php"><img src="pics\ngnlogoo.png" width="50" height="50">NGN.NET Enterprises</a>
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

      <div style="min-height: 90%;">
        <div class="jumbotron jumbotron-fluid text-center">
          <h1 class="display-4">My Account</h1>
        </div>

        <div class="body-below-account">
          <table class="table text-center">
              <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tr>
                <td width="33.33%"><?php echo $_SESSION['user']['username']; ?></td>
                <td width="33.33%"><?php echo $_SESSION['user']['email']; ?></td>
                <td width="33.33%">
                  <form method="POST">
                    <button class="btn btn-info" name="edit_button" id="edit_button">Edit</button>
                    <button class="btn btn-danger" name="delete_button" onclick="return confirm('Are you sure?')">Delete</button>
                    <button class="btn btn-warning" name="edit_pw_button" id="edit_pw_button">Reset Password</button>
                  </form>
                </td>
              </tr>
              <tr id="update_form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                  <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id'] ?>" />
                  <td class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter your new username" required /></td>
                  <td class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your new email" required /></td>
                  <td class="form-group">
                    <button type="submit" class="btn btn-info" name="update_button">Update</button>
                  </td>
                </form>
              </tr>
              <tr id="update_form_pw">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" oninput='inputPassword2.setCustomValidity(inputPassword2.value != inputPassword1.value ? "Passwords do not match." : "")'>
                  <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id'] ?>" />
                  <td class="form-group">
                    <input type="password" name="current_password" class="form-control" placeholder="Enter current password" required />
                  </td>
                  <td class="form-group">
                    <input type="password" name="new_password" class="form-control" placeholder="Enter new password" required />
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm new password" required />
                  </td>
                  <td class="form-group">
                    <button type="submit" class="btn btn-info" name="update_pw_button">Update</button>
                  </td>
                </form>
              </tr>
          </table>
        </div>
      </div>
      
      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>

      <script type="text/javascript">
        $("#edit_button").click(function(e){
          e.preventDefault();
          $("#update_form").toggle();
        });
        $("#edit_pw_button").click(function(e){
          e.preventDefault();
          $("#update_form_pw").toggle();
        });
      </script>
    </body>
</html>