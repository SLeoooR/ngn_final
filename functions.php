<!--
  Honor Code:
    This is my own work and I have not received any unauthorized help in completing this. 
    I have not copied from my classmate, friend, nor any unauthorized resource. I am well 
    aware of the policies stipulated in the handbook regarding academic dishonesty. If proven 
    guilty, I won't be credited any points for this endeavor.
-->
<?php 
  session_start();

  $db = new mysqli('localhost', 'root', '', 'ngn', "3308");

  if ($db->connect_error)
      die("Connection Failed");

  $id = 0;
  $username = "";
  $email    = "";

  if (isset($_POST['register_button'])) {
    register();
  }

  function register(){
    global $db, $username, $email;

    $username    =  $_POST['inputUsername'];
    $email       =  $_POST['inputEmail'];
    $password_1  =  $_POST['inputPassword1'];
    $password_2  =  $_POST['inputPassword2'];
    $password = md5($password_1);

    $apiKey = 'SXFJW1FHHRZ3FHPOLI7X';
    $params['format'] = 'json';
    $params['email'] = $email;

    $query = '';

    foreach($params as $key=>$value){
      $query .= '&' . $key . '=' . rawurlencode($value);
    }

    $try = 0;
    do {
      $result = file_get_contents('https://api.mailboxvalidator.com/v1/validation/single?key=' . $apiKey . $query);
    } while(!$result && $try++ < 3);

    $data = json_decode($result);

    if ($data->is_domain == '-' || $data->is_smtp == '-' || $data->is_verified == '-' || $data->is_server_down == '-' || $data->is_greylisted == '-' || 
    $data->is_disposable == '-' || $data->is_suppressed == '-' || $data->is_role == '-' || $data->is_high_risk == '-' || $data->is_catchall == '-'){
      $_SESSION['email_validity']  = "Your email address is not valid!";
      header('location: register.php?email-validity');
    } else {
      $query = "INSERT INTO users (username, email, user_type, password) VALUES('$username', '$email', 'user', '$password')";
      mysqli_query($db, $query);

      $inserted_user_id = mysqli_insert_id($db);

      $query = "SELECT * FROM users WHERE id=" . $inserted_user_id;
      $result = mysqli_query($db, $query);

      $_SESSION['user'] = mysqli_fetch_assoc($result);
      $_SESSION['logged_in']  = "You are now logged in";
      header('location: index_ngn.php');
    }
  }

  if (isset($_POST['signin_button'])) {
	  login();
  }

  function login(){
    global $db, $username;

    $username = $_POST['inputUsername'];
    $password = $_POST['inputPassword'];

    $password = md5($password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
        $logged_in_user = mysqli_fetch_assoc($results);
        if ($logged_in_user['user_type'] == 'admin') {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['logged_in']  = "You are now logged in";
            header('location: admin.php');		  
        }else{
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['logged_in']  = "You are now logged in";

            header('location: index_ngn.php');
        }
    }else {
      $_SESSION['error_combination']  = "Wrong username/password combination.";
    }
  }

  function isLoggedIn(){
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
  }

  function isAdmin(){
    if ($_SESSION['user']['user_type'] == 'admin' ) {
      return true;
    } else {
      return false;
    }
  }

  if (isset($_GET['logout'])) {
    $_SESSION['logged_out'] = "Successfully logged out.";
    header('location: index_ngn.php?logged-out');
  }

  if (isset($_POST['delete_button'])) {
    $id = $_SESSION['user']['id'];
    $db->query("DELETE FROM users WHERE id=$id") or die($db->error());

    $_SESSION['deleted_account'] = "Your account has been deleted!";
    header('location: index_ngn.php?deleted-account');
  }

  if (isset($_POST['update_button'])){
    $id = $_SESSION['user']['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $apiKey = 'SXFJW1FHHRZ3FHPOLI7X';
    $params['format'] = 'json';
    $params['email'] = $email;

    $query = '';

    foreach($params as $key=>$value){
      $query .= '&' . $key . '=' . rawurlencode($value);
    }

    $try = 0;
    do {
      $result = file_get_contents('https://api.mailboxvalidator.com/v1/validation/single?key=' . $apiKey . $query);
    } while(!$result && $try++ < 3);

    $data = json_decode($result);

    if ($data->is_domain == '-' || $data->is_smtp == '-' || $data->is_verified == '-' || $data->is_server_down == '-' || $data->is_greylisted == '-' || 
    $data->is_disposable == '-' || $data->is_suppressed == '-' || $data->is_role == '-' || $data->is_high_risk == '-' || $data->is_catchall == '-'){
      $_SESSION['email_validity']  = "Your email address is not valid!";
      header('location: account.php?email-validity');
    } else {
      $db->query("UPDATE users SET username='$username', email='$email' WHERE id=$id") or die($db->error);
      
      $_SESSION['user']['username'] = $username;
      $_SESSION['user']['email'] = $email;

      $_SESSION['updated_account'] = "User details has been updated.";
      header('location: account.php?updated-account');
    }
  }

  if (isset($_POST['update_pw_button'])){
    $id = $_SESSION['user']['id'];
    $result = $db->query("SELECT password FROM users WHERE id=$id") or die($db->error());

    $row = $result->fetch_array();
    $current_password = $row['password'];
    $new_password = md5($_POST['new_password']);
    if ($current_password == md5($_POST['current_password'])){
      $db->query("UPDATE users SET password='$new_password' WHERE id=$id") or die($db->error);
      $_SESSION['updated_password'] = "Password has been updated.";
      header('location: account.php?updated-password');
    } else {
      $_SESSION['error_password'] = "Current password is not correct!";
      header('location: account.php?error-password');
    }
  }
?>