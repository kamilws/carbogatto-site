<?php
$message = '<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
</head>
<body style="width: 100% !important; min-width: 100%; padding: 20px; box-sizing: border-box; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: #000000; font-family: \'Helvetica\', \'Arial\', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0;">';

$message .= "<p>New order from Carbogatto</p>";
$message .= "<p>Client name: {$_POST['firstname']} <br> Email: {$_POST['email']} <br> Phone: {$_POST['tel']}</p>";

$tdStyle = 'color: #787878; border-top: 1px solid #00d2ff; border-bottom: 1px solid #00d2ff; padding: 7px 0;';
$i = 1;
foreach ($_POST['bikes'] as $key => $bikeData) {
    $message .= "<h3 style='margin: 0 0 10px 0;'>BIKE $i</h3>";
    $message .= '<table style="border-collapse: collapse; width: 100%; margin-bottom: 25px;">';
    $message .= "<tr><td style='$tdStyle'>{$bikeData['color_id']}</td></tr>";
    $message .= "<tr><td style='$tdStyle'>{$bikeData['links_id']}";
    if ($_POST['individual-color']) {
        $message .= ": {$_POST['individual-color']}";
    }
    $message .= "</td></tr>";
    $message .= "<tr><td style='$tdStyle'>{$bikeData['details_id']}</td></tr>";
    $message .= "<tr><td style='$tdStyle'>{$bikeData['frame_id']}</td></tr>";
    $message .= "<tr><td style='$tdStyle'>{$bikeData['battery_id']}</td></tr>";
    $message .= "<tr><td style='$tdStyle'>{$bikeData['motor_id']}</td></tr>";
    $message .= "<tr><td style='$tdStyle'>{$bikeData['tyres_id']}</td></tr>";
    $message .= "<tr><td style='$tdStyle'>Quantity: {$bikeData['quantity']}</td></tr>";

    $message .= '</table>';
    $i++;
}
$message .= '</body></html>';


require_once 'utils/utils.mail.php';
send_mail("carbogatto@driveeco.co", "Order by Carbogatto", $message);
