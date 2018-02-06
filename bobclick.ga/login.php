<?php
$username = $mysqli->escape_string($_POST['uname']);
$result = $mysqli->query("SELECT * FROM Users WHERE Username='$username'");
if ($result->num_rows == 0){//User doesn't exist
    $_SESSION['message'] = "User with that name doesn't exist!";
    header("location: error.php");
}
else{ //User Exists
    $user = $result->fetch_assoc();
    if(password_verify($_POST['psw'], $user['Password'])){
        $_SESSION['email'] = $user['Email'];
        $_SESSION['username'] = $user['Username'];
        $_SESSION['hash'] =$user['Hash'];
         // This is how we'll know the user is logged in
         $_SESSION['logged_in'] = true;
         header("location: add.php");
     }
     else {
         $_SESSION['message'] = "You have entered wrong password, try again!";
         header("location: error.php");
     }
 }
 ?>