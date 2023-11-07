<?php
require_once 'database.php';
require_once 'vendor/autoload.php';

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the 'email' session variable is set
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    echo $email;

    // Retrieve the user's email from the database
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $pass = $row['password'];

        $basePath = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        $basePath = rtrim($basePath, '/');

        $link = "<a href='http://$basePath/reset_password.php'>Click To Reset password</a>";

        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration


            // Sender and recipient details

            $mail->Subject = 'Reset Password';
            $mail->Body = 'Click On This Link to Reset Password ' . $link . '.';

            // Send the email
            if ($mail->send()) {
                $_SESSION['mail_sent'] = true;
                header("Location: forget_password.php");
                exit;
            }
        } catch (Exception $e) {
            echo "Mail Error: " . $mail->ErrorInfo;
        }
    } else {
        $_SESSION['do_not_exist'] = true;
        header("Location: forget_password.php");
        exit;
    }
}
