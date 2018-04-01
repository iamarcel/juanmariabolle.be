<?php

/**
 * Provides:
 *   $page_form
 *   $email_to (Juan's email address)
 *   $words (text to add at the start of the message)
 */
require_once('config.php');

$action = $_SERVER['REQUEST_METHOD'];

if ($action === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['object'];
  $message = $_POST['message'];

  if ($name === '' || $email === '' || $message === '') {
    echo "Name, email and message are required.<br/>";
    echo "Please fill in <a href='" . $page_form . "'>the form</a>";
    echo "again.";
  } else {
    $header = "From: $name<$email>\r\nReturn-path: $email";
    mail($email_to, $subject, $words . "\n\r\n\r" . $message, $header);
    echo "Thanks! You've sent an email to Juan.";
  }
} else {
  echo "Please fill in <a href='" . $page_form . "'>the form</a>.";
}

?>
