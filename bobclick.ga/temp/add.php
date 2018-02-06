<?php 
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before playing!";
    header("location: error.php");    
  }
  ?>
?>
<!DOCTYPE html>
<html>
<!-- Sets up page -->

<head>
    <meta charset="UTF-8">
    <title>Bobert Clicker</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!-- ************************************************* -->
    <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          
          ?>
    <!-- Shop Menu -->
    <div id="ShopIcon">
        <div id="Circle">
            <div id="TopLine"></div>
            <div id="MiddleLine"></div>
            <div id="BottomLine"></div>
        </div>
        <div id="ShopModal">
            <div class="ModalMenu">
                <h2 class="ShopTitle">The Bob
                    <br />Shop</h2>
            </div>
        </div>
    </div>
    <!--DISPLAYS BOB COUNT-->
    <div id="main" class="Centered">
        <div>
        <span class="Yeahs">
            Yeahs:
        </span>
        <span id="YeahDisplayEdit">
            0
        </span>
        </div>
        <div>
                <hr class="Fancy">
            <a href="javascript:void(0)" onclick="AddYeah()">
                <img src="Images/Bob-forever.gif">
            </a>
        </div>
    </div>
    <!-- ************************************************* -->
    <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
</body>
<footer>
    <script src="menuAnimation.js"></script>
    <script src="Maths.js"></script>
</footer>

</html>
<!-- ************************************************** -->