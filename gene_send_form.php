<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "sam.alegria@gmail.com";
 
    $email_subject = "New reservation order";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['date']) ||
 
        !isset($_POST['time']) ||
 
        !isset($_POST['pickup']) ||
 
        !isset($_POST['dropoff']) ||

        !isset($_POST['car_type']) ||

        !isset($_POST['telephone']) ||

        !isset($_POST['email']) ||

        !isset($_POST['company']) ||

        !isset($_POST['message'])

        ) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $date = $_POST['date']; // required
 
    $time = $_POST['time']; // required
 
    $pickup = $_POST['pickup']; // not required
 
    $dropoff = $_POST['dropoff']; // required

    $car_type = $_POST['car_type']; // required

    $telephone = $_POST['telephone']; // required

    $email = $_POST['email']; // required

    $company = $_POST['company']; // required

    $message = $_POST['message']; // required
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
   
  if(strlen($message) < 2) {
 
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($name)."\n";
 
    $email_message .= "Date: ".clean_string($date)."\n";
 
    $email_message .= "Time: ".clean_string($time)."\n";
 
    $email_message .= "Pickup: ".clean_string($pickup)."\n";
 
    $email_message .= "Dropoff: ".clean_string($dropoff)."\n";

    $email_message .= "Dropoff: ".clean_string($dropoff)."\n";
 
    $email_message .= "Car Type: ".clean_string($car_type)."\n";

    $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Company: ".clean_string($company)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>