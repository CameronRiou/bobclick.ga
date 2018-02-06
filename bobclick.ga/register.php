<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
// Escape all $_POST variables to protect against SQL injections
$_SESSION['username'] = $mysqli->escape_string($_POST['uname']);
$_SESSION['email'] = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['psw'], PASSWORD_BCRYPT));
$_SESSION['hash'] = $mysqli->escape_string( md5( rand(0,1000) ) );
      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM Users WHERE Email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO Users (Username, Email, Password, Hash) VALUES ('{$_SESSION['username']}','{$_SESSION['email']}','$password','{$_SESSION['hash']}')";

    // Add user to the database
    if ( $mysqli->query($sql)){

        $_SESSION['logged_in'] = true; // So we know the user has logged in

        // Send registration confirmation link (verify.php)
        $to      = $_SESSION['email'];
        $subject = "Account Verification ( bobclick.ga )";
        $message_body = "Hello {$_SESSION['username']},\r\nThank you for signing up!";  
        mail( 'smtp.bobclick.ga', $to, $subject, $message_body );

        header("location: add.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed! Could not add to the database';
        header("location: error.php");
    }

}