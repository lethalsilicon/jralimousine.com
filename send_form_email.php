<?php
 
//This is the email address that the contact form will be send to. Usually this will be your email address
$to = "reservations@jralimousine.com";
$to_test = "sam.alegria@gmail.com";

 
//This is so you know what the email subject is about
$subject = "Reservation from Website";
$subject2 = "JRA Limousine Reservation Received";
 
//Information gathered from the form.
$name_field = $_POST['name'];
$date_field = $_POST['date'];
$time_field = $_POST['time'];
$pickup_field = $_POST['pickup'];
$dropoff_field = $_POST['dropoff'];
$car_type_field = $_POST['car_type'];
$telephone_field = $_POST['telephone'];
$email_field = $_POST['email'];
$company_field = $_POST['company'];
$message = $_POST['message'];
 
//combine everything to the body of the email
$body = "From: $name_field\nDate: $date_field\nTime: $time_field\nPickup Location: $pickup_field\nDropoff Location: $dropoff_field\nCar Type: $car_type_field\nTelephone: $telephone_field\nE-Mail: $email_field\nCompany: $company_field\nMessage:\n$message\n";
 
 $body2 = "Thank you $name_field! We have received your information and will respond to you shortly. If urgent, you may call 203-253-0731.";
//send the email
mail($to, $subject, $body);//This goes to JRA
mail($to_test, $subject, $body);//This goes to Sam
mail($email_field, $subject2, $body2);//This goes to reserver

header('Location: thank_you.php');
exit();

?>