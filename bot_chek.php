<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secret = 'your-secret-key';
    $input = json_decode(file_get_contents('php://input'), true);
    $token = $input['recaptchaToken'] ?? '';

    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token");
    $responseData = json_decode($verifyResponse, true);

    echo json_encode([
        'success' => $responseData['success'],
        'score' => $responseData['score'] ?? 0
    ]);
}
?>
