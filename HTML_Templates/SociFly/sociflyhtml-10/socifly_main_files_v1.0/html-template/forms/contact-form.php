<?php

    require_once('../sendmail.php');

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $error = "";

    if (strlen($name) < 2) {
        $error['name'] = "Please enter your name";
    }

    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Please enter a valid email address";
    }

    if (strlen($subject) < 2) {
        $error['subject'] = "Please enter a subject";
    }

    if (!$error) {

        require_once('phpmailer/class.phpmailer.php');
        $mail = new PHPMailer();

        $mail->From = $email;
        $mail->FromName = $name;
        $mail->Subject = $subject;
        $mail->AddAddress($site_owners_email, $site_owners_name);
        $mail->IsHTML(true);
        $mail->Body = '<b>Name:</b><br/> '. $name .'<br/><br/><b>E-mail:</b><br/> '. $email .'<br/><br/><b>Subject:</b><br/> '. $subject .'<br/><br/><b>Message:</b><br/>' . $message;

        $mail->Send();

        echo "<div class='alert alert-success'><div class='alert--inner'>Thanks " . $name . ". Your message has been sent.</div></div>";

    } # end if no error
    else {

        $response = (isset($error['name'])) ? "<div class='alert alert-danger'><div class='alert--inner'>" . $error['name'] . "</div></div> \n" : null;
        $response .= (isset($error['email'])) ? "<div class='alert alert-danger'><div class='alert--inner'>" . $error['email'] . "</div></div> \n" : null;
        $response .= (isset($error['subject'])) ? "<div class='alert alert-danger'><div class='alert--inner'>" . $error['subject'] . "</div></div> \n" : null;

        echo $response;
    } # end if there was an error sending

?>
