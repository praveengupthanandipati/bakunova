<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
    exit;
}

$name    = trim(strip_tags($_POST['name']    ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$subject = trim(strip_tags($_POST['subject'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

/* Server-side validation */
if (strlen($name) < 2) {
    echo json_encode(['success' => false, 'error' => 'Please enter your full name.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Please enter a valid email address.']);
    exit;
}
if (empty($subject)) {
    echo json_encode(['success' => false, 'error' => 'Please select a subject.']);
    exit;
}
if (strlen($message) < 20) {
    echo json_encode(['success' => false, 'error' => 'Message must be at least 20 characters.']);
    exit;
}

$subject_labels = [
    'product-inquiry' => 'Product Inquiry',
    'sample-request'  => 'Sample Request',
    'partnership'     => 'Partnership Opportunity',
    'licensing'       => 'Licensing & Co-Development',
    'pricing'         => 'Pricing & Supply',
    'other'           => 'Other',
];
$subject_label = $subject_labels[$subject] ?? ucfirst(str_replace('-', ' ', $subject));

//to address and subject for the email
$to          = 'info@corewebpro.in';
$mail_subject = 'Bakunova Contact Form: ' . $subject_label;

$mail_body  = "New enquiry from the Bakunova website contact form.\n";
$mail_body .= str_repeat('-', 50) . "\n\n";
$mail_body .= "Name    : {$name}\n";
$mail_body .= "Phone   : {$phone}\n";
$mail_body .= "Email   : {$email}\n";
$mail_body .= "Subject : {$subject_label}\n";
$mail_body .= "\nMessage:\n{$message}\n";
$mail_body .= "\n" . str_repeat('-', 50) . "\n";
$mail_body .= "Sent from bakunova.com\n";

$headers  = "From: no-reply@bakunova.com\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($to, $mail_subject, $mail_body, $headers);

echo json_encode(['success' => (bool) $sent]);
