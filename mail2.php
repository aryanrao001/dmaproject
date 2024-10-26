<?php  
//include("conn.php");
include("class.phpmailer2.php");
extract($_POST);

$name = isset($_POST["name"]) ? $_POST["name"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$mobile = isset($_POST["mobile"]) ? $_POST["mobile"] : '';
$comment = isset($_POST["comment"]) ? $_POST["comment"] : '';
$subject = isset($_POST["subject"]) ? $_POST["Subject "] : '';

// echo " Name : $name Email : $email Mobile : $mobile Comment : $comment ";


$mail = new PHPMailer();
		//$mail->From = "Agus";
		$mail->FromName = ("DMR");
		//$mail->FromName = "Agus";	
		$mail->AddAddress("kumarrahul38994@gmail.com");
		//$mail->AddCC("cuteraj111@gmail.com");
		//$mail->AddBCC("anant299@gmail.com");	
		$mail->WordWrap = 500;                           
		// $mail->IsHTML(true);  		
		$mail->Subject = "Enquiry Form";
    $mail->Body="Name: $name\n\nEmail: $email\n\nMobile: $mobile\n\nSubject: $subject\n\nComment: $comment  ";
 
 if(!$mail->Send())
		   {
		   echo "Message could not be sent.";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   //exit;
		  }	
		  else
		  {
			header("location:thankyou-request7.php");
		  //  header("location:thankyou-request.php");
		  // //echo "<meta http-equiv='Refresh' Content='0 URL=thankyou.php'>";
		  }

// echo"$first";

 ?>


