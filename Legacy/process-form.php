<?php
/**
 * CS1520 Project
 *
 * @author Fadi Alchoufete <fba4@pitt.edu>
 * @version 1.0
 */

// Protect against non-POST requests
if (!$_POST) {
  header("Location: index.php");
  exit();
}

if ($_POST['name'] == "" || $_POST['email'] == "" || $_POST['message'] == "") {
  echo "You are missing required fields in the form.";
  header("HTTP/1.0 500 Internal Server Error");
  exit();
}

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// mail("fadi.alchoufete@gmail.com", "DJ: " + $name, $message, $headers);

// Use in case of non-ajax POST to this page
header("Location: index.php");
exit();
?>