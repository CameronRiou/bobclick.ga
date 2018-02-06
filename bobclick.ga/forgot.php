<?php 
  /* Reset your password form, sends reset.php password link */
  require "connect.php";
  session_start();
  // Check if form submitted with method="post"
  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {   
      $email = $mysqli->escape_string($_POST['email']);
      $result = $mysqli->query("SELECT * FROM Users WHERE Email='$email'");
      if ( $result->num_rows == 0 ){ // User doesn't exist
          $_SESSION['message'] = "User with that email doesn't exist!";
          header("location: error.php");}
      else { // User exists (num_rows != 0)
          $user = $result->fetch_assoc(); // $user becomes array with user data
          $email = $user['Email'];
          $hash = $user['Hash'];
          $username = $user['Username'];

          // Session message to display on success.php
          $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
          . " for a confirmation link to complete your password reset!</p>";

          // Send registration confirmation link (reset.php)
          $to      = $email;
          $subject = 'Password Reset Link ( bobclick.ga )';
          $message_body = '
          Hello '.$username.',

          You have requested a password reset!

          Please click this link to reset your password:

          http://bobclick.ga/reset.php?email='.$email.'&hash='.$hash;  

          mail($to, $subject, $message_body);

          header("location: success.php");
    }
  }
?>

<!> <!> <!>

<!DOCTYPE html>
<html>    
    <head>
        <title>Reset Your Password</title>
    </head>

    <!> <!> <!>
 
    <body>
        <div class="form">
            <h1>
                Reset Your Password
            </h1>
            <form action="forgot.php" method="post">
                <div class="field-wrap">
                    <label>
                        Email Address
                        <span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off" name="email"/>
                </div>
                <button class="button button-block"/>
                    Reset
                </button>
            </form>
        </div>
    </body>
</html>