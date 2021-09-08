<?php


//	if (!isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["ohone"]) || !isset($_POST["company"]) || !isset($_POST["click_origin"])) {
//		return false;
//	}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$click_origin = $_POST["click_origin"];
$apiKey = "1234";

$json_obj = json_encode(array("name" => $name, "email" => $email, "phone" => $phone, "company" => $company, 'click_origin' => $click_origin, 'investment' => '', 'apiKey' => $apiKey));


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://admin.meediaonne.com/api/landing-page/store");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mediapartner-SeaStorm-1.0');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_obj);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);


echo $server_output;
