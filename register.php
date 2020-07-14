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

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body class="text-center vsc-initialized">
      <?php if (isset($_GET['email-validity'])) {
        if (isset($_SESSION['email_validity'])) {
          echo "<div style='margin-bottom: 0;' class='alert alert-danger text-center'>";
          echo $_SESSION['email_validity'];
          echo "</div>";
        }
        unset($_SESSION['email_validity']);
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
        </div>
      </nav>

      <form class="form-signin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" oninput='inputPassword2.setCustomValidity(inputPassword2.value != inputPassword1.value ? "Passwords do not match." : "")'>
        <img class="mb-4" src="ngnlogoo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="inputUsername" class="form-control" placeholder="Username" required> <br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus> <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword1" class="form-control" placeholder="Password" required> <br>
        <label for="inputPassword2" class="sr-only">Confirm Password</label>
        <input type="password" name="inputPassword2" class="form-control" placeholder="Confirm Password" required> <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register_button">Sign Up</button> <br>
        <p>Already have an account? <a href="login.php" class="text-primary">Login</p></a>
      </form>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>
    </body>
</html>