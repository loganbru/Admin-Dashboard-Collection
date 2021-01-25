<?php
if($_POST)
{
    $to_Email       = "support@bestlooker.pro"; // Replace with recipient email address
	$subject        = 'Message from website '.$_SERVER['SERVER_NAME']; //Subject line for emails
    
    $host           = "smtp.mail.yahoo.com"; // Your SMTP server. For example, smtp.mail.yahoo.com
    $username       = "your.email@yahoo.com"; //For example, your.email@yahoo.com
    $password       = "1234567"; // Your password
    $SMTPSecure     = "ssl"; // For example, ssl
    $port           = 465; // For example, 465
    
    
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    
        //exit script outputting json data
        $output = json_encode(
        array(
            'type'=>'error', 
            'text' => 'Request must come from Ajax'
        ));
        
        die($output);
    } 
    
    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["userName"]) || !isset($_POST["userPhone"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
    $user_Date        = filter_var($_POST["userDate"], FILTER_SANITIZE_STRING);
    $user_Time        = filter_var($_POST["userTime"], FILTER_SANITIZE_STRING);
    $user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
    
    $user_Message = str_replace("\&#39;", "'", $user_Message);
    $user_Message = str_replace("&#39;", "'", $user_Message);
    
    //additional php validation
    if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
        die($output);
    }
    if(strlen($user_Phone)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Phone is too short or empty!'));
        die($output);
    }
    
    //proceed with PHP email.
    include("php/PHPMailerAutoload.php"); //you have to upload class files "class.phpmailer.php" and "class.smtp.php"
 
	$mail = new PHPMailer();
	 
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	
	$mail->Host = $host;
	$mail->Username = $username;
	$mail->Password = $password;
	$mail->SMTPSecure = $SMTPSecure;
	$mail->Port = $port;
	
	 
	$mail->setFrom($username);
	 
	$mail->AddAddress($to_Email);
	$mail->Subject = $subject;
	$mail->Body = $user_Message. "\r\n\n"  .'Name: '.$user_Name. "\r\n" .'Phone: '.$user_Phone. "\r\n" .'Date: '.$user_Date. "\r\n" .'Time: '.$user_Time;
	$mail->WordWrap = 200;
	$mail->IsHTML(false);

	if(!$mail->send()) {

		$output = json_encode(array('type'=>'error', 'text' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo));
		die($output);

	} else {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_Name .'! Thank you for your email'));
		die($output);
	}
    
}
?>