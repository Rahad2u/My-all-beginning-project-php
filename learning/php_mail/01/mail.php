<?php
// ini_set('SMTP','myserver');
$to      = 'rahadhasan33675@gmail.com';
$subject = 'test php mail';
$message = 'Hello PHP: Are you working?';
$headers = 'From: testPHP@example.com' . "\r\n" .
    'Reply-To: testPHP@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
