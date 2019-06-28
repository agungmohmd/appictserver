<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type. Authorization, X-Requested-With");
header("Content-Type: application/json; charset=utf-8");

include "library/config.php";
include "library/function_date.php";
include "library/functionvalidation.php";

$post = json_decode(file_get_contents('php://input'), true);

?>