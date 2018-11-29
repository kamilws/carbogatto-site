<?php
/*
 * $_POST = array('firstname' => 'Aleks',
    'tel' => '123',
    'email' => '123@123',
    'delivery' => '123',
    'base-price' => '80000',
    'individual-color' => '12',
    'bikes' => array('0.12' => array(
        'quantity' => '1',
        'color_id' => 'Color: Carbon || 200',
        'links_id' => 'Links Color: Allunium Matted || 200',
        'details_id' => 'Handles, Supports AND Seat COLOR: Black || 250',
        'frame_id' => 'Frame: Megacarbon || 2 000 €',
        'battery_id' => 'Battery: B-20  || 22 000 €',
        'motor_id' => 'Motor: GT-1100 || 1 000 €',
        'tyres_id' => 'Tyres: Pirelli XT-30 || 1 000 €',
    ),'0.13' => array(
        'quantity' => '1',
        'color_id' => 'Color: Carbon || 200',
        'links_id' => 'Links Color: Allunium Matted || 200',
        'details_id' => 'Handles, Supports AND Seat COLOR: Black || 250',
        'frame_id' => 'Frame: Megacarbon || 2 000 €',
        'battery_id' => 'Battery: B-20  || 22 000 €',
        'motor_id' => 'Motor: GT-1100 || 1 000 €',
        'tyres_id' => 'Tyres: Pirelli XT-30 || 1 000 €',
    )));
 */


//Хелпер для цены и наименования
function get_price($str) {
    $parts = explode('||', $str);
    $parts[1] = intval(str_replace(' ', '', $parts[1]));
    return $parts;
}
//Хелперы для стилей таблицы
$tdStyleBase = 'border-top: 1px solid #00d2ff; border-bottom: 1px solid #00d2ff; padding: 7px 0;';
$tdStyle = "color: #787878; $tdStyleBase";
//Номер заказа
$number = intval(file_get_contents('files/order-number.txt'));
file_put_contents('files/order-number.txt', ++$number);

//Сообщение для отправки
$message = '<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
</head>
<body style="width: 100% !important; min-width: 100%; padding: 20px; box-sizing: border-box; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: #000000; font-family: \'Helvetica\', \'Arial\', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0;">';
$message .= "<p>New order from Carbogatto</p>";
$message .= "<p>Client name: {$_POST['firstname']} <br>Email: {$_POST['email']} <br>Phone: {$_POST['tel']} <br>Delivery: $_POST[delivery]</p>";
$message .= "<hr>";
$message .= "<p style='font-size: 16px;'>Order: #{$number}</p>";

$i = 1;
$total = 0;
foreach ($_POST['bikes'] as $key => $bikeData) {
    $message .= "<h3 style='margin: 0 0 10px 0;'>BIKE $i</h3>";
    $message .= '<table style="border-collapse: collapse; width: 100%; margin-bottom: 25px;">';
    //Color
    $message .= "<tr>
                  <td style='$tdStyle'>". get_price($bikeData['color_id'])[0]."</td>
                  <td style='$tdStyleBase' align='right'>".get_price($bikeData['color_id'])[1]." €</td>
                 </tr>";
    //Links
    $message .= "<tr>";
    if ($_POST['individual-color']) {
        $message .= "<td style='$tdStyle'>Links color - Individual Color: {$_POST['individual-color']}</td>";
    } else {
        $message .= "<td style='$tdStyle'>". get_price($bikeData['links_id'])[0]."</td>";
    }
    $message .= "<td style='$tdStyleBase' align='right'>".get_price($bikeData['links_id'])[1]." €</td>
                 </tr>";
    //Details
    $message .= "<tr>
                  <td style='$tdStyle'>". get_price($bikeData['details_id'])[0]."</td>
                  <td style='$tdStyleBase' align='right'>".get_price($bikeData['details_id'])[1]." €</td>
                 </tr>";
    //Frame
    $message .= "<tr>
                  <td style='$tdStyle'>". get_price($bikeData['frame_id'])[0]."</td>
                  <td style='$tdStyleBase' align='right'>".get_price($bikeData['frame_id'])[1]." €</td>
                 </tr>";
    //Battery
    $message .= "<tr>
                  <td style='$tdStyle'>". get_price($bikeData['battery_id'])[0]."</td>
                  <td style='$tdStyleBase' align='right'>".get_price($bikeData['battery_id'])[1]." €</td>
                 </tr>";
    //Motor
    $message .= "<tr>
                  <td style='$tdStyle'>". get_price($bikeData['motor_id'])[0]."</td>
                  <td style='$tdStyleBase' align='right'>".get_price($bikeData['motor_id'])[1]." €</td>
                 </tr>";
    //Tyres
    $message .= "<tr>
                  <td style='$tdStyle'>". get_price($bikeData['tyres_id'])[0]."</td>
                  <td style='$tdStyleBase' align='right'>".get_price($bikeData['tyres_id'])[1]." €</td>
                 </tr>";
    $message .= "<tr>
                  <td style='$tdStyle'>Quantity:</td>
                  <td style='$tdStyleBase' align='right'>{$bikeData['quantity']}</td>
                 </tr>";
    //Total
    $bikeTotal = ($_POST['base-price'] +
        get_price($bikeData['color_id'])[1] +
        get_price($bikeData['links_id'])[1] +
        get_price($bikeData['details_id'])[1] +
        get_price($bikeData['battery_id'])[1] +
        get_price($bikeData['motor_id'])[1] +
        get_price($bikeData['tyres_id'])[1] +
        get_price($bikeData['frame_id'])[1]) * $bikeData['quantity'];
    $total += $bikeTotal;
    $message .= "<tr>
                  <td style='$tdStyle'>Bike price:</td>
                  <td style='$tdStyleBase' align='right'>$bikeTotal €</td>
                 </tr>";
    $message .= '</table>';
    $i++;
}
$message .= "<p style='font-size: 16px; font-weight: bold;;'><span style='float: right;'>$total €</span><span>TOTAL:</span><div style='clear: both'></div></p>";
$message .= '</body></html>';

require_once 'utils/utils.mail.php';
//send_mail("webmaster@maximumufa.ru", "Order by Carbogatto", $message);
send_mail("carbogatto@driveeco.co", "Order by Carbogatto", $message);
//echo $message;
