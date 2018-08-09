<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['budget']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }


$headers = "From: " . $_POST["name"] . "<" . $_POST["email"] . ">" . "\r\n";
$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "X-Priority: 1\r\n";

$message = $_POST['message'];
$budget = $_POST['budget'];
$name = $_POST['name'];


$body = "#Name: " . $name . ",　";
$body .= "#Budget: " . $budget . ",　";
$body .= "#Message: " . $message. ",　";


  //
  mail( "spambox@designlab.co", $_POST['subject'], $body, $headers );

  //			^
  //  Replace with your email
}
?>
