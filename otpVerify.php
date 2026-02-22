<?php
include 'conn.php';

session_start();
$checkotp = $_POST['checkotp'];
$otp = $_SESSION['otp'];
$Username = $_SESSION['un'];
$Email = $_SESSION['ema'];
$Mobile = $_SESSION['mob'];
$H_Password = $_SESSION['pass'];

if($checkotp == $otp){
    function generateCode($length){
	    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	    $code = "";
	    $clean = strlen($chars) - 1;
	    while(strlen($code) < $length){
		    $code .= $chars[mt_rand(0, $clean)];
	    }
	    return $code;
    }
    // Insert new user
    $session = generateCode(20); 
    $insertUser = $conn->prepare("INSERT INTO user (Username, Email, Mobile, Password, Session, Date) VALUES (?, ?, ?, ?, ?, CURDATE())");
    $insertUser->bind_param("ssiss",$Username, $Email, $Mobile, $H_Password, $session);

    if ($insertUser->execute()) {
        setcookie("id", $conn->insert_id, time() + 60 * 60 * 24 * 30, "/", NULL);
        setcookie("un", $Username, time() + 60 * 60 * 24 * 30, "/", NULL);
        setcookie("session", $session, time() + 60 * 60 * 24 * 30, "/", NULL);
        unset($_SESSION['un']);
        unset($_SESSION['pass']);
        unset($_SESSION['ema']);
        unset($_SESSION['mob']);
        unset($_SESSION['otp']);
        header("Location: ../PistonCult_home.php");
        exit();
    } else {
        echo '<script>alert("Registration failed. Please try again."); window.open("../register.php", "_self");</script>';
        exit();
    }
}
else{
    echo '<script>alert("Incorrect OTP. Please try again."); window.open("otpVerify.php", "_self");</script>';
}  
?>