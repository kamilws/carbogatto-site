<?php
  $firstname = $_POST['firstname'];
  //$email = $_POST['email'];
  $tel = $_POST['tel'];
 
 //Acces Congig vars
   $individual_color = $_POST['individual-color'];
 //  $tyres = $_POST['tyres_id'];

$bikesArray = $_POST['bikes'];
//$bike = array_pop($bikesArray);
//$tyres = $bikesArray[1];
//$comma_separated = implode(";", $bikesArray);
//list($month, $day, $year) = split('[/.-]', $bikesArray);



//foreach ($_POST['bikes'] as $key => $bikeData) {
//print_r($bikeData);
//$bikeString2 = $bikeString . $bikeData;
//}

/*
foreach ($_POST['bikes'] as $key => $bikeData) {
$bikeString = implode("\r\n", $bikeData);
$bikeQuant = array_shift($bikeString);
}
*/

$bikeString = '';
foreach ($_POST['bikes'] as $key => $bikeData) {
$bikeString.= implode("\r\n", $bikeData);
}


$AccString = '';
foreach ($_POST['acc'] as $key => $accData) {
$AccString.= implode("\r\n", $accData);
}


  $from = $_POST['email'];
  $message = $_POST['textarea'];

  $to = "carbogatto@driveeco.co";
  $subject = "Order by Carbogatto";
  
  $message = "Hello!" . "\r\n" . "New order from Carbogatto:" . "\r\n" . $firstname . "\r\n" . $from . "\r\n" . $tel . "\r\n" . "Bike Configs:" . "\r\n" . $individual_color . "\r\n" . $bikeString . "\r\n" . "ACCESSORIES:" . "\r\n" . $AccString;
  $headers = "From: " . $email . "\r\n" .
  "CC: kamilws73@gmail.com";

  mail($to,$subject,$message,$headers);
?>