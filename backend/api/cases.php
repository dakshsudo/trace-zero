<?php

require_once "../config/database.php";

header("Content-Type: application/json");

try {
    $stmt = $pdo->query(
        "SELECT id, case_code, title, description, difficulty, time_limit
         FROM cases
         ORDER BY id ASC"
    );

    $cases = $stmt->fetchAll();

    echo json_encode([
        "success" => true,
        "cases" => $cases
    ]);

} catch (PDOException $e) {

    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Failed to retrieve cases."
    ]);
}
?>