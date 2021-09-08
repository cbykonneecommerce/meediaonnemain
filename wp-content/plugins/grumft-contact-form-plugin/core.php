<?php
/*
	 * Plugin Name: Grumft Contact Form Plugin
	 * Description: Grumft Contact Form Plugin.
	 * Author: Grumft
	 * Author URI: https://grumft.com
	 * Version: 1.0
	 */

function send_register_form()
{

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$company = $_POST["company"];
	$investment = $_POST["investment"];
	$click_origin = $_POST["click_origin"];
	$apiKey = "1234";

	$json_obj = json_encode(array("name" => $name, "email" => $email, "phone" => $phone, "company" => $company, 'click_origin' => $click_origin, 'investment' => $investment, 'apiKey' => $apiKey));

//	echo $json_obj;


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
}



function prefix_register_send_form()
{
	register_rest_route('register-form', '/send', array(
		'methods'  => 'POST',
		'callback' => 'send_register_form',
	));
}

add_action('rest_api_init', 'prefix_register_send_form');
