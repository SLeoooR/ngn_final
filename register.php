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
    <body>
      <?php if (isset($_GET['email-validity'])) {
        if (isset($_SESSION['email_validity'])) {
          echo "<div style='margin-bottom: 0;' class='alert alert-danger text-center'>";
          echo $_SESSION['email_validity'];
          echo "</div>";
        }
        unset($_SESSION['email_validity']);
      } ?>
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
        </div>
      </nav>

      <form method="post" class="body-below text-center mt-3 form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" oninput='inputPassword2.setCustomValidity(inputPassword2.value != inputPassword1.value ? "Passwords do not match." : "")'>
        <img class="mb-4" src="pics\ngnlogoo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <hr>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="inputUsername" class="form-control mb-4" placeholder="Username" required>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="inputEmail" class="form-control mb-4" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword1" class="form-control mb-4" placeholder="Password" required>
        <label for="inputPassword2" class="sr-only">Confirm Password</label>
        <input type="password" name="inputPassword2" class="form-control mb-4" placeholder="Confirm Password" required>
        <button class="btn btn-lg btn-primary btn-block mb-4" type="submit" name="register_button">Sign Up</button>
        <p>Already have an account? <a href="login.php" class="text-primary">Login</p></a>
      </form>

      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>
    </body>
</html>