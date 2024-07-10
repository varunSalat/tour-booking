<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Define your secret key
$secretKey = '0x4AAAAAAAeu25CiwuZfhnVEU4-hkIAoBl4';

// Get response token from the form
$responseToken = $_POST['cf-turnstile-response'];

// Get user's IP address
$remoteIP = $_SERVER['REMOTE_ADDR'];

// Prepare data for the POST request
$data = array(
    'secret' => $secretKey,
    'response' => $responseToken,
    'remoteip' => $remoteIP
);

// Initialize Curl session
$ch = curl_init();

// Set Curl options
curl_setopt($ch, CURLOPT_URL, 'https://challenges.cloudflare.com/turnstile/v0/siteverify');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$response = curl_exec($ch);

// Close the Curl session
curl_close($ch);

// Decode the JSON response
$result = json_decode($response, true);

// Check if verification was successful
if ($result && isset($result['success']) && $result['success'] === true) {
    // Verification successful, proceed with sending the email

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2; // Change to 2 for detailed debug output
        $mail->isSMTP();
        $mail->Host       = 'assignmentintelligence.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'test@assignmentintelligence.com';
        $mail->Password   = 'Varun@5677';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use PHPMailer::ENCRYPTION_STARTTLS instead of 'tls'
        $mail->Port       = 587;

        $mail->setFrom('filesdoom@gmail.com', 'Assignment Intelligence');
        $mail->addAddress('filesdoom@gmail.com', 'Assignment Intelligence');

        $mail->Subject = 'New Client Submission';
        $mail->Body    = "Name: ".$_POST['name']."\n"."Email: ".$_POST['email']."\n"."Phone: ".$_POST['phone']."\n"."Enquiry: ".$_POST['enquiry'];

        $mail->send();

        // Redirect back to the referring page after email is sent
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit; // Make sure to exit after redirect
    } catch (Exception $e) {
        // Log the error
        error_log('Mail error: ' . $mail->ErrorInfo);

        echo '<script>';
        echo 'alert("Captcha verification successful, but email could not be sent. Please try again.");';
        echo 'window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";';
        echo '</script>';
    }
} else {
    // Verification failed, handle error
    echo '<script>';
    echo 'alert("Captcha verification failed. Please try again.");';
    echo 'window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";';
    echo '</script>';
}
?>