<?php

require_once "../config/database.php";

header("Content-Type: application/json");

echo json_encode([
    "success" => true,
    "message" => "TRACE//ZERO database connection successful."
]);

?>