<?php  
use PHPMailer\PHPMailer\PHPMailer;
require_once '../otp/mail_vendor/autoload.php';

include 'conn.php';

session_start();
$otp = rand(1000,9999);
$_SESSION['otp'] = $otp;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email-submit'])) {
    $Username = trim($_POST['Username']);
    $Email = trim($_POST['Email']);
    $Mobile = trim($_POST['Mobile']);
    $Password = trim($_POST['Password']);
    $H_Password = password_hash($Password, PASSWORD_DEFAULT);

	//store in session
	$_SESSION['ema'] = $Email;
    $_SESSION['un'] = $Username;
    $_SESSION['mob'] = $Mobile;
    $_SESSION['pass'] = $H_Password;

    // Validate inputs
    if (!preg_match('/^[a-zA-Z0-9]+$/', $Username)) {
        echo '<script>alert("Invalid Username. Only letters and numbers allowed."); window.open("../register.php", "_self");</script>';
        exit();
    }

	if (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/', $Email)) {
		echo '<script>alert("Invalid Email format."); window.open("../register.php", "_self");</script>';
		exit();
	}	

    if (!preg_match('/^\d{10}$/', $Mobile)) {
        echo '<script>alert("Invalid Mobile number. Must be 10 digits."); window.open("../register.php", "_self");</script>';
        exit();
    }

    // Check for existing user
    $checkQuery = $conn->prepare("SELECT * FROM user WHERE Username = ? OR Email = ? OR Mobile = ?");
    $checkQuery->bind_param("sss", $Username, $Email, $Mobile);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['Username'] === $Username) {
            echo '<script>alert("Username Already in Use!!!!"); window.open("../register.php", "_self");</script>';
        } elseif ($row['Email'] === $Email) {
            echo '<script>alert("Email Already in Use!!!!"); window.open("../register.php", "_self");</script>';
        } elseif ($row['Mobile'] === $Mobile) {
            echo '<script>alert("Mobile Number Already in Use!!!!"); window.open("../register.php", "_self");</script>';
        }
        exit();
    }

	function otpmail($em,$ot){
		// create a new mail object
		$mail = new PHPMailer();

		// configure an SMTP
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'cultpiston@gmail.com';
		$mail->Password = 'xfzi ctkl jbth amqo';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = 587;
		
		//email details
		$mail->setFrom('cultpiston@gmail.com', 'Piston Cult');
		$mail->addAddress($em, 'Me');
		$mail->Subject = 'OTP Authentication';
		
		// Set Email Content
		$mail->isHTML(TRUE);
		$mail->Body = '<html>Your OTP is '.$ot.'</html>';
		$mail->AltBody = 'Your OTP is '.$ot;
				
		// send the email
		if(!$mail->send()){
		} else {
		}
	}

	otpmail($Email,$otp);
	echo $Email;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/log.css">
	<script>
		function resendOTP() {
			document.getElementById('resend-form').submit();
		}
    </script>
</head>
<body>	
	<div id="otp" class="wrapper otp-container">
    	<h2>Enter OTP</h2>
    	<form method="post" action="otpSubmit.php" class="form otp-form">
        	<div class="input-box">
            	<input type="number" name="checkotp" id="otp" placeholder="Enter OTP...">
            	<span class="otp-error"></span>
        	</div>
        	<button class="btn otp-button">Verify</button>
    	</form><br>
	</div>
</body>
</html>

