<?php 
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before playing!";
    header("location: error.php");    
  }
  ?>
<!DOCTYPE html>
<html>
    <!-- Sets up page -->
    <head>
        <meta charset="UTF-8">
        <title>Bobert Clicker</title>
        <link rel="stylesheet" href="Style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    </head>

    <!> <!> <!>

    <body>
        <!>
        <div id="main" class="Centered" ng-app="Click"> <!--DISPLAYS BOB COUNT-->
            <div ng-controller="Add">
                <div>
                    <span class="Yeahs">
                        Yeahs:
                    </span>
                    <span id="YeahDisplayEdit">
                        {{Score()}}
                    </span>
                </div>
                <div>
                    <hr class="Fancy">
                    <a ng-click="Increase()">
                    	<img src="Images/Bobert-yeah-miner-repeat-.05.gif" id='but'>
                    </a>
                </div>
            </div>
        </div>
        <!>
        <div id="ShopIcon" ng-app="Shop" > <!-- Shop Menu -->
            <div id="Circle">
                <div id="TopLine"></div>
                <div id="MiddleLine"></div>
                <div id="BottomLine"></div>
            </div>
            <div id="ShopModal" ng-controller="MainController">
                <div class="ModalMenu">
                    <h2 class="ShopTitle">
                        {{title}}
                    </h2>

                    <div info="" ng-repeat="product in products">
                        <product info="product"></product>
                    </div>
                </div>
            </div>
        </div>
        <!>
        <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
    <!>
    </body>

    <!> <!> <!>

    <footer>
        <script src="menuAnimation.js"></script>
        <script src="Maths.js"></script>
        <script src="Upgrades.js"></script>
        <!--<script src="Directives/product.js"></script>-->
        <script>$leave();</script>
    </footer>
    
    <!> <!> <!>

</html>
