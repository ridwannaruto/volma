<?php
require_once('PHPMailer_5.2.0/class.phpmailer.php');

function sendEmail($email, $name){
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "volmaadmin@moraspirit.com";
	$mail->Password = "admin@volma";
	$mail->SetFrom("volmaadmin@moraspirit.com");
	$mail->Subject = "Bundle Account Confirmation";
	$mail->Body = "Dear ".$name.",<br/><br/>Your account has been activated now.<br/><br/>From now you can log in to your account by using your 'Username' and 'Password'.<br/><br/>Please click http://www.volma.moraspirit.com/web/login to setup your profile now<br/><br/>Regards,<br/><br/>Admin (Bundle)";
	$mail->AddAddress($email);
	$mail->AddBCC("glmalaka@gmail.com");
	if(!$mail->Send())
	{
		$to='glmalaka@gmail.com';
		$subject="Error";
		$header="from: MoraSpirit" . "\r\n" . "BCC: glmalaka@gmail.com";
		$message="Email error: ".$mail->ErrorInfo;
		// send email
		$sentmail = mail($to,$subject,$message,$header);
		echo "Email error: ".$mail->ErrorInfo;
	}
	else
	{
		//echo "Message has been sent";
	}
}

function getNewUsers(){
	$servername = "localhost";
	$username = "morasp5_volma";
	$password = "Bundle@msp15";
	$dbname = "morasp5_volma";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
	else {
		$sql="SELECT id, username, email FROM user WHERE status != 2"; 
    		$result=mysqli_query($conn, $sql);
        	while($result && $rows=mysqli_fetch_array($result)){
	        	$id=$rows['id'];
	        	$name=$rows['username'];
	        	$email=$rows['email'];
	        	$sql2="UPDATE user SET status=2 WHERE id='$id'";
                    	$result2=mysqli_query($conn, $sql2);
                    	if($result2){
                    		sendEmail($email, $name);
                    	}
	        }
	        mysqli_close($conn);
	}
}

getNewUsers();
?>