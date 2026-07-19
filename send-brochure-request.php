<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
    exit;
}

$name    = trim(strip_tags($_POST['full_name']    ?? ''));
$company = trim(strip_tags($_POST['company_name'] ?? ''));
$email   = trim(strip_tags($_POST['email']        ?? ''));
$mobile  = trim(strip_tags($_POST['mobile']       ?? ''));

/* Server-side validation */
if (strlen($name) < 2) {
    echo json_encode(['success' => false, 'error' => 'Please enter your full name.']);
    exit;
}
if (strlen($company) < 2) {
    echo json_encode(['success' => false, 'error' => 'Please enter your company name.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Please enter a valid corporate email address.']);
    exit;
}
if (strlen(preg_replace('/[^0-9]/', '', $mobile)) < 7) {
    echo json_encode(['success' => false, 'error' => 'Please enter a valid mobile number.']);
    exit;
}

$to           = 'info@bakunova.com';
$mail_subject = 'Bakunova Pipeline Brochure Request: ' . $company;

$mail_body  = "New pipeline programmes brochure request from the Bakunova website.\n";
$mail_body .= str_repeat('-', 50) . "\n\n";
$mail_body .= "Full Name       : {$name}\n";
$mail_body .= "Company Name    : {$company}\n";
$mail_body .= "Corporate Email : {$email}\n";
$mail_body .= "Mobile Number   : {$mobile}\n";
$mail_body .= "\n" . str_repeat('-', 50) . "\n";
$mail_body .= "Sent from bakunova.com/pipeline.php\n";

$headers  = "From: no-reply@bakunova.com\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($to, $mail_subject, $mail_body, $headers);

echo json_encode(['success' => (bool) $sent]);
