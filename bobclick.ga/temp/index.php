<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<!DOCTYPE html>
<html>
<!-- Sets up page -->
<!-- Head:
    charset: the encoding type
    title: name displayed on tab
    link: linking in the CSS file
    script: loading in jquery for the animation
-->
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
        <link rel="stylesheet" href="Style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/ecfb05971a.js"></script>
    </head>
<!-- ************************************************* -->
    <body>
      
              <img src="Images/Bob-forever.gif" class="Centered BobStart">

      <table class="homebar">
        <tr>
          <th id="signUp">
            <button id="signUpBut">Sign Up</button>
          </th>
          <th id="middle" class="SignInTitle">Bobert Clicker</th>
          <th id="logIn">
            <button id="logInBut">Sign In</button>
          </th>
          </tr>
      </table>
      
		<div id="SignUpModal" class="ModalMenu">
            <form class="ModalContent Animate" action="index.php" autocomplete="off" mode="post">
                <div class="UpClose Animate">
                    <span> &times; </span>
                </div>
                <h2 class="SignInTitle">Sign Up</h2>
                <div id="SignInContent">
                    <input type="text" placeholder="Username" name="uname" required>
                    <input type="text" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="psw" required>
                  <input type="password" placeholder="Password" name="psw" required>
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
        <div id="SignInModal" class="ModalMenu">
            <form class="ModalContent Animate" action="index.php" autocomplete="off" mode="post">
                <div class="InClose Animate">
                    <span> &times; </span>
                </div>
                <h2 class="SignInTitle">Log In</h2>
                <div id="SignInContent">
                    <input type="text" placeholder="Username" name="uname" required>
                    <input type="password" placeholder="Password" name="psw" required>
                    <button type="submit">Login</button>
                </div>
            </form>
            <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
        </div>
    </body>
    <footer>
        <script src="menuAnimation.js"></script>
    </footer>
    </html>