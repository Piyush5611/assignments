<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/csrf.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . asset('/contact.php'));
    exit;
}

$token = $_POST['csrf_token'] ?? null;
if (!csrf_validate($token)) {
    $_SESSION['flash'] = ['type' => 'danger', 'message' => 'Invalid or expired form token. Please try again.'];
    header('Location: ' . asset('/contact.php'));
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $subject === '' || $message === '') {
    $_SESSION['flash'] = ['type' => 'warning', 'message' => 'Please complete all fields with a valid email address.'];
    header('Location: ' . asset('/contact.php'));
    exit;
}

$toEmail = env('MAIL_TO', env('SMTP_USERNAME'));
if (!$toEmail) {
    $_SESSION['flash'] = ['type' => 'warning', 'message' => 'Email service not configured. Please set MAIL_TO or SMTP_* in your .env.'];
    header('Location: ' . asset('/contact.php'));
    exit;
}

$sent = false;
$error = null;

// Try PHPMailer via Composer if available
if (class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
    try {
        $mailer = new PHPMailer\PHPMailer\PHPMailer(true);

        $useSmtp = env('SMTP_HOST');
        if ($useSmtp) {
            $mailer->isSMTP();
            $mailer->Host = (string)env('SMTP_HOST');
            $mailer->Port = (int)env('SMTP_PORT', 587);
            $mailer->SMTPAuth = (bool)env('SMTP_AUTH', true);
            $mailer->Username = (string)env('SMTP_USERNAME');
            $mailer->Password = (string)env('SMTP_PASSWORD');
            $mailer->SMTPSecure = (string)env('SMTP_SECURE', PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS);
        }

        $fromEmail = env('MAIL_FROM', $email);
        $fromName = env('MAIL_FROM_NAME', $name ?: APP_NAME);

        $mailer->setFrom($fromEmail, $fromName);
        $mailer->addAddress($toEmail);
        $mailer->addReplyTo($email, $name ?: 'Website Visitor');
        $mailer->Subject = $subject ?: 'New Contact Form Message';
        $mailer->isHTML(true);
        $mailer->Body = nl2br(htmlspecialchars($message));
        $mailer->AltBody = $message;

        $mailer->send();
        $sent = true;
    } catch (Throwable $e) {
        $error = $e->getMessage();
    }
} else {
    // Fallback to PHP's mail() as a basic placeholder
    $headers = 'From: ' . ($name ?: 'Website Visitor') . ' <' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $sent = @mail($toEmail, $subject ?: 'New Contact Form Message', $message, $headers);
}

if ($sent) {
    $_SESSION['flash'] = ['type' => 'success', 'message' => 'Thanks! Your message has been sent.'];
} else {
    $msg = 'Message failed to send.' . ($error ? ' ' . $error : '');
    $_SESSION['flash'] = ['type' => 'danger', 'message' => $msg];
}

header('Location: ' . asset('/contact.php'));
exit;
