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

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <style>
          body {
            font-family: 'Helvetica';
          }
          #navcenter {
            margin: 0 auto;
          }
          .navbar{
            padding-left: 10%;
            padding-right: 10%;
          }
          .form-signin {
            margin: 7% 37% 7% 37%;
            overflow: auto;
          }
        </style>
    </head>
    <body class="text-center vsc-initialized">
      <?php if (isset($_SESSION['error_logged_in'])) { ?>
        <div style='margin-bottom: 0;' class='alert alert-danger text-center'>
            <?php 
              echo $_SESSION['error_logged_in'];
              unset($_SESSION['error_logged_in']);
            ?>
        </div>
      <?php } else if (isset($_SESSION['error_combination'])) { ?>
        <div style='margin-bottom: 0;' class='alert alert-danger text-center'>
            <?php 
              echo $_SESSION['error_combination'];
              unset($_SESSION['error_combination']);
            ?>
        </div>
      <?php } ?>
      <div id="navextend">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="index_ngn.php"><img src="ngnlogoo.png" width="50" height="50">NGN.NET Enterprises</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="navcenter">
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
      </div>
      
      <form class="form-signin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <img class="mb-4" src="ngnlogoo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Username</label> <br>
        <input type="username" name="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label> <br>
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required> <br>
        <p></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin_button">Sign in</button> <br>
        <p>Not a member? <a href="register.php" class="text-primary">Sign Up</p></a>
      </form>
      
      <footer class="text-light">
        <div class="footer-copyright text-center py-2 bg-primary">Copyright © Scott Leo C. Reganit</div>
      </footer>

      <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
          You are signed in now!
          </div>
        </div>
      </div>
    </body>
</html>