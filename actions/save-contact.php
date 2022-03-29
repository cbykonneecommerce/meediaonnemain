<?php

header("Content-Type: text/html;charset=utf-8");

//session_start();

$obj = (object)[];
$obj->name = htmlspecialchars($_POST["name"]);
$obj->email = htmlspecialchars($_POST["email"]);
$obj->message = htmlspecialchars($_POST["message"]);

//#################se for check box
//$obj->message = isset($_POST["name-checkbox"]) ? "Sim" : "Não";

//var_dump($obj);

// $servername = "localhost";
// $username = "root";
// $password = "123";
// $dbname = "site_ebike";

// $conn = new mysqli($servername, $username, $password, $dbname);
// mysqli_set_charset($conn, "utf8");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO purchase_solicitations (firstname, lastname, cpf, address, email, phone, obs, cor_quadro, cor_banco, tamanho_banco, cor_roda, tipo_farol, final_price, payment_type)
// VALUES ('$obj->firstname', '$obj->lastname', '$obj->cpf', '$obj->address', '$obj->email', '$obj->phone', '$obj->obs', '$obj->cor_quadro', '$obj->cor_banco', '$obj->tamanho_banco', '$obj->cor_roda', '$obj->tipo_farol', '$obj->final_price', '$obj->payment_type')";

// if ($conn->query($sql) === TRUE) {
require_once __DIR__ . '/mail/send-contact.php';

//     if ($obj->payment_type == "pagseguros") {
//         echo 2;
//     } else {
//         echo 1;
//     }
// } else {
//     echo 0;
// }

// $conn->close();