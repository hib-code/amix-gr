<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Etc/UTC');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = trim($_POST['email']); // إزالة الفراغات من البريد
    $message = $_POST['message'];
    $emails_file = 'sent_emails.txt';

    // قراءة الإيميلات بدون فراغات إضافية
    $sent_emails = file_exists($emails_file) ? array_map('trim', file($emails_file, FILE_IGNORE_NEW_LINES)) : [];
    if (in_array($email, $sent_emails)) {
        echo "❌ Vous avez déjà envoyé une demande avec cet email.<br>Il n'est pas possible d'envoyer plus d'une seule demande.";
        exit;
    }

    $admin_email = 'amixcodingteam@gmail.com';


    $smtp_host = 'smtp.gmail.com';
    $smtp_user = 'amixcodingteam@gmail.com';
    $smtp_pass = 'rmzq nqlp lohi bavd'; 
    $smtp_port = 587;

  
    $mail_admin = new PHPMailer(true);
    try {
        $mail_admin->isSMTP();
        $mail_admin->Host = $smtp_host;
        $mail_admin->SMTPAuth = true;
        $mail_admin->Username = $smtp_user;
        $mail_admin->Password = $smtp_pass;
        $mail_admin->SMTPSecure = 'tls';
        $mail_admin->Port = $smtp_port;

        $mail_admin->setFrom($smtp_user, 'Formulaire Contact');
        $mail_admin->addAddress($admin_email);

        $mail_admin->isHTML(true);
        $mail_admin->Subject = 'Nouveau message reçu';
        $mail_admin->Body = "
            <h3>Nom : $nom</h3>
            <h4>Email : $email</h4>
            <p>Message : $message</p>
        ";

        $mail_admin->send();
    } catch (Exception $e) {
        echo "Erreur envoi à l'administrateur : {$mail_admin->ErrorInfo}";
        exit;
    }

    // Confirmation à l'utilisateur
    $mail_user = new PHPMailer(true);
    try {
        $mail_user->isSMTP();
        $mail_user->Host = $smtp_host;
        $mail_user->SMTPAuth = true;
        $mail_user->Username = $smtp_user;
        $mail_user->Password = $smtp_pass;
        $mail_user->SMTPSecure = 'tls';
        $mail_user->Port = $smtp_port;

        $mail_user->setFrom($smtp_user, 'Amix');
        $mail_user->addAddress($email, $nom);

        $mail_user->isHTML(true);
        $mail_user->Subject = 'Confirmation Groupe Amix';
        $mail_user->Body = "
    <div style='max-width:500px;margin:0 auto;padding:24px;
                font-family:Arial,sans-serif;background:#151f28;
                border:2px solid #602e9e;border-radius:12px;color:#fff;'>
        <h2 style='margin-top:0;color:#7829f7;font-size:28px;font-weight:bold;'>
            Merci pour votre message, $nom !
        </h2>
        <p style='font-size:16px;line-height:1.6;margin:18px 0 0 0;'>
            Nous avons bien reçu votre demande.<br>
            <span style='color:#ff0000;font-weight:bold;'>Notre équipe vous répondra sous 24h.</span>
        </p>
        <div style='margin:24px 0;padding:16px;background:#602e9e;border-radius:8px;'>
            <span style='color:#fff;font-weight:bold;'>Votre message est enregistré.</span>
        </div>
        <p style='font-size:14px;color:#bdbdbd;margin-top:32px;'>
            Cordialement,<br>
            <span style='color:#7829f7;'>L’équipe Amix</span>
        </p>
    </div>
";


        $mail_user->send();
        $_SESSION['sent_email'] = true; // حدد أن المستخدم أرسل رسالة
    } catch (Exception $e) {
        echo "Message envoyé à l'admin, mais échec de l'email à l'utilisateur : {$mail_user->ErrorInfo}";
    }

    // بعد الإرسال الناجح أضف البريد للملف
    file_put_contents($emails_file, $email . PHP_EOL, FILE_APPEND);

    echo "✅ Message envoyé avec succès !<br>Merci pour votre confiance.<br>Nous vous répondrons sous 24h.";
}
?>