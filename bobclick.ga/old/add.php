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
</body>
<footer>
    <script src="menuAnimation.js"></script>
    <script src="Maths.js"></script>
</footer>

</html>
<!-- ************************************************** -->