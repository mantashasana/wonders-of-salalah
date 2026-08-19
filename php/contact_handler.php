<?php
// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /salalah/contact.php');
    exit;
}

require_once __DIR__ . '/connection.php';

// Get and clean form data
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate required fields
if ($name === '' || $email === '' || $message === '') {
    header('Location: /salalah/contact.php?error=1');
    exit;
}

$stmt = $conn->prepare("
    INSERT INTO contacts (name, email, subject, message)
    VALUES (?, ?, ?, ?)
");

if (!$stmt) {
    header('Location: /salalah/contact.php?error=1');
    exit;
}

$stmt->bind_param('ssss', $name, $email, $subject, $message);

$success = $stmt->execute();

// Close resources before redirecting
$stmt->close();
$conn->close();

if ($success) {
    header('Location: /salalah/contact.php?success=1');
} else {
    header('Location: /salalah/contact.php?error=1');
}

exit;