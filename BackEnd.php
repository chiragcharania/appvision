<?php
  require_once('recaptchalib.php');
  $privatekey = "aFakePrivateKey";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The CAPTCHA wasn't entered correctly. Go back and try it again.");
  } else {





if(isset($_POST['eadrr'])) {

    $email_to = "blank@blank.com";
    $email_subject = "Customer Support";


    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['inquire']) ||
        !isset($_POST['eadrr']) ||
        !isset($_POST['mess'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

    $type = $_POST['inquire']; // required
    $email_from = $_POST['eadrr']; // required
    $comments = $_POST['mess']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 5) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Type of Inquiry: ".clean_string($type)."\n";
    $email_message .= "Message: ".clean_string($comments)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

echo 'Thank you for your message. Based on the type of inquiry we may respond within a week.';

}


  }
?>