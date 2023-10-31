<?php
require_once("../include/connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/PHPMailer/Exception.php';
require 'vendor/PHPMailer/PHPMailer.php';
require 'vendor/PHPMailer/SMTP.php';


session_start();

if (isset($_POST["adminlog"])) {


	date_default_timezone_set("asia/manila");
	$date = date("M-d-Y h:i A", strtotime("+0 HOURS"));

	$username = mysqli_real_escape_string($conn, $_POST["admin_user"]);
	$password = mysqli_real_escape_string($conn, $_POST["admin_password"]);



	$query = mysqli_query($conn, "SELECT * FROM admin_login WHERE admin_user = '$username'") or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query);
	$id = $row['id'];
	$admin = $row['admin_user'];
	$_SESSION['id']=$id;
	$_SESSION["admin_user"] = $row["admin_user"];
	$_SESSION["designation"] = $row["designation"];
	$_SESSION["office"] = $row["office"];
	$_SESSION["user_status"] = $row["admin_status"];


	$counter = mysqli_num_rows($query);

	if ($counter == 0) {
		echo "<script type='text/javascript'>alert('Invalid Email Address or Password,Please try again!');
				  document.location='index.html'</script>";
	} else {
		if (password_verify($password, $row["admin_password"])) {
			$_SESSION['admin_user'] = $id;

			if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
				$ip = $_SERVER["HTTP_CLIENT_IP"];
			} elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
				$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			} else {
				$ip = $_SERVER["REMOTE_ADDR"];
			}

			$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);



			$remarks = "Has LoggedIn the system at";
			mysqli_query($conn, "INSERT INTO history_log1(id,admin_user,action,ip,host,login_time) VALUES('$id','$admin','$remarks','$ip','$host','$date')") or die(mysqli_error($conn));

			/*********** Login Verification **********/
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->SMTPDebug = 0; //Enable verbose debug output
				$mail->isSMTP(); //Send using SMTP
				$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
				$mail->SMTPAuth = true; //Enable SMTP authentication
				$mail->Username = 'crempcocooperative@gmail.com'; //SMTP username
				$mail->Password = 'wfcl cnus iyvo gbyu'; //SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
				$mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('crempcocooperative@gmail.com');
				$mail->addAddress($username, ''); //Add a recipient

				//Content
				$firstcode = rand(100, 999);
				$secondcode = rand(100, 999);
				$mail->isHTML(true); //Set email format to HTML
				$mail->Subject = 'Verification Code for System Access.';
				$mail->Body = '<b>'.$firstcode . ' ' . $secondcode . '</b> is your Verification Code';

				$mail->send();

			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			/*********** Login Verification **********/
			$givingCode = mysqli_query($conn,"UPDATE `admin_login` SET `code`='$firstcode$secondcode' WHERE `id`='$id'");
			echo "<script type='text/javascript'>document.location='verification_page.html00'</script>";
			   
		} else {
			echo "<script type='text/javascript'>alert('Invalid Email Address or Password,Please try again!');
				  document.location='index.html'</script>";
		}
	}
}
?>