<?php
require_once 'utils/utils.mail.php';

$message = "<p>New message</p>";
$message .= "<p>Form: $_POST[form]</p>";
$message .= "<p>Email: $_POST[email]</p>";
if($_POST['phone']) {
    $message .= "<p>Phone: $_POST[phone]</p>";
}
if($_POST['name']) {
    $message .= "<p>Client name: $_POST[name]</p>";
}
if($_POST['text']) {
    $message .= "<p>Client message: </p> <p>$_POST[text]</p>";
}

send_mail("sio@driveeco.co", "Message from Carbogatto", $message);
