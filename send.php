<?php

require(__DIR__ . '/PHPMailer/PHPMailerAutoload.php');
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

// Server-Side Validation
$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$email = trim($_POST['email']);
$contact = trim($_POST['contact']);
$message = trim($_POST['message']);
$hidden_field = trim($_POST['hidden_field']); // Honeypot field

// Set the default timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

$errors = [];

// Validate Honeypot
if (!empty($hidden_field)) {
    $errors[] = "Bot detected!";
}

// Validate Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

// Validate Phone Number (10 digits only)
if (!preg_match('/^\d{10}$/', $contact)) {
    $errors[] = "Invalid phone number. Please enter a 10-digit number.";
}

// Validate Other Fields
if (empty($fname) || empty($lname)) {
    $errors[] = "All fields are required.";
}

// Validate Google reCAPTCHA
$recaptcha_secret = '6Lez9N0sAAAAAKLIka8ofI8b2PIZ3bXu-wnr64D4';
$recaptcha_response = $_POST['g-recaptcha-response'];
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptcha_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$recaptcha_result = curl_exec($ch);
curl_close($ch);

$recaptcha_decoded = json_decode($recaptcha_result, true);

if (!$recaptcha_decoded['success']) {
    $errors[] = "reCAPTCHA verification failed. Please try again.";
}

// Display errors and exit if any
if (!empty($errors)) {
    echo '<script>';
    echo 'alert("' . implode('\\n', $errors) . '");';
    echo 'window.location.href = "contact.php";';
    echo '</script>';
    exit;
}

// Prepare email content for admin
// Prepare email content for admin
$htmlbody = '
    <html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>New Contact Form Submission</title>

    <style>

        body{
            margin:0 !important;
            padding:0 !important;
            width:100% !important;
            background:#E3DBBB;
            font-family:Arial, Helvetica, sans-serif;
        }

        table{
            border-collapse:collapse !important;
        }

        img{
            border:0;
            display:block;
            max-width:100%;
            height:auto;
        }

        .wrapper{
            width:100%;
            padding:30px 15px;
            background:#E3DBBB;
        }

        .card{
            width:100%;
            max-width:680px;
            background:#F8F3E0;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 35px rgba(0,0,0,0.08);
        }

        .content{
            padding:40px;
        }

        .heading{
            margin:0;
            color:#41431B;
            font-size:30px;
            line-height:40px;
            font-weight:700;
        }

        .text{
            color:#41431B;
            font-size:16px;
            line-height:28px;
        }

        .data-box{
            background:#E3DBBB;
            border-radius:16px;
            overflow:hidden;
        }

        .label{
            color:#41431B;
            font-size:15px;
            font-weight:bold;
        }

        .value{
            color:#41431B;
            font-size:15px;
            line-height:26px;
        }

        @media only screen and (max-width:600px){

            .content{
                padding:25px !important;
            }

            .heading{
                font-size:24px !important;
                line-height:34px !important;
            }

            .text{
                font-size:15px !important;
                line-height:26px !important;
            }

            .mobile-stack td{
                display:block !important;
                width:100% !important;
                box-sizing:border-box;
            }

        }

    </style>

</head>

<body>

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="wrapper">
        <tr>
            <td align="center" style="padding:40px 20px;">

                <table border="0" cellspacing="0" cellpadding="0" class="card">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="
                                background:#41431B;
                                padding:35px 20px;
                            ">

                            <img src="https://digikcon.com/wrappackncarry/images/wrap-logo.png"
                                width="220">

                        </td>
                    </tr>

                    <!-- Title -->
                    <tr>
                        <td class="content">

                            <h1 class="heading">
                                New Contact Form Submission
                            </h1>

                            <p class="text">
                                Client has submitted the following details through the website contact form.
                            </p>

                            <!-- Data -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                class="data-box mobile-stack">

                                <tr>
                                    <td width="35%"
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="label">
                                        Name
                                    </td>

                                    <td
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="value">
                                        <?php echo htmlspecialchars($name); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="label">
                                        Phone
                                    </td>

                                    <td
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="value">
                                        <?php echo htmlspecialchars($phone); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="label">
                                        Email
                                    </td>

                                    <td
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="value">
                                        <?php echo htmlspecialchars($email); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="label">
                                        Subject
                                    </td>

                                    <td
                                        style="
                                            padding:18px 25px;
                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                        "
                                        class="value">
                                        <?php echo htmlspecialchars($subject); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top"
                                        style="
                                            padding:18px 25px;
                                        "
                                        class="label">
                                        Message
                                    </td>

                                    <td
                                        style="
                                            padding:18px 25px;
                                        "
                                        class="value">
                                        <?php echo nl2br(htmlspecialchars($message)); ?>
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="
                                background:#41431B;
                                padding:30px 20px;
                            ">

                            <p style="
                                margin:0;
                                color:#F8F3E0;
                                font-size:14px;
                                line-height:26px;
                            ">
                                WrapPackNCarry<br>

                                <a href="mailto:info@wrappackncarry.com"
                                    style="
                                        color:#F8F3E0;
                                        text-decoration:none;
                                    ">
                                    info@wrappackncarry.com
                                </a>
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>';

// Prepare email content for client
$client_htmlbody = '
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Thank You for Contacting Us</title>

    <style>

        body{
            margin:0 !important;
            padding:0 !important;
            width:100% !important;
            background:#E3DBBB;
            font-family:Arial, Helvetica, sans-serif;
        }

        table{
            border-collapse:collapse !important;
        }

        img{
            border:0;
            display:block;
            max-width:100%;
            height:auto;
        }

        .wrapper{
            width:100%;
            padding:30px 15px;
            background:#E3DBBB;
        }

        .card{
            width:100%;
            max-width:680px;
            background:#F8F3E0;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 35px rgba(0,0,0,0.08);
        }

        .content{
            padding:50px 45px;
        }

        .heading{
            margin:0 0 20px;
            color:#41431B;
            font-size:32px;
            line-height:42px;
            font-weight:700;
        }

        .text{
            color:#41431B;
            font-size:16px;
            line-height:30px;
        }

        .btn{
            display:inline-block;
            background:#41431B;
            color:#F8F3E0 !important;
            text-decoration:none;
            padding:14px 30px;
            border-radius:10px;
            font-size:16px;
            font-weight:bold;
        }

        @media only screen and (max-width:600px){

            .content{
                padding:30px 25px !important;
            }

            .heading{
                font-size:26px !important;
                line-height:36px !important;
            }

            .text{
                font-size:15px !important;
                line-height:26px !important;
            }

        }

    </style>

</head>

<body>

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="wrapper">
        <tr>
            <td align="center" style="padding:40px 20px;">

                <table border="0" cellspacing="0" cellpadding="0" class="card">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:#41431B; padding:35px 20px;">

                            <img src="https://digikcon.com/wrappackncarry/images/wrap-logo.png"
                                width="220">

                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td class="content">

                            <h1 class="heading">
                                Thank You!
                            </h1>

                            <p class="text">
                                Hi <strong><?php echo $clientName; ?></strong>,
                            </p>

                            <p class="text">
                                Thank you for contacting
                                <strong>WrapPackNCarry</strong>.
                                We have successfully received your inquiry
                                and our team will get back to you shortly.
                            </p>

                            <p class="text">
                                We appreciate your interest in our eco-friendly packaging solutions.
                            </p>

                            <br>

                            <a href="https://digikcon.com/wrappackncarry/"
                                class="btn">
                                Visit Website
                            </a>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="
                                background:#41431B;
                                padding:30px 20px;
                            ">

                            <p style="
                                margin:0;
                                color:#F8F3E0;
                                font-size:14px;
                                line-height:26px;
                            ">
                                Team WrapPackNCarry<br>

                                <a href="mailto:info@wrappackncarry.com"
                                    style="
                                        color:#F8F3E0;
                                        text-decoration:none;
                                    ">
                                    info@wrappackncarry.com
                                </a>
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>';
// kcdi vqko dwgv yaku- app password
// Admin Email Setup
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'support@technofra.com';
$mail->Password = 'kcdi vqko dwgv yaku';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('support@technofra.com', 'Technofra');
$mail->addAddress('support@technofra.com');
$mail->isHTML(true);
$mail->Subject = 'Received an inquiry from the Technofra website contact page (' . $currentDateTime . ')';
$mail->Body = $htmlbody;

// Send Admin Email
if (!$mail->send()) {
    header('Location: failed.php');
    exit;
}

// Client Email Setup
$client_mail = new PHPMailer();
$client_mail->IsSMTP();
$client_mail->Host = 'smtp.gmail.com';
$client_mail->SMTPAuth = true;
$client_mail->Username = 'support@technofra.com';
$client_mail->Password = 'kcdi vqko dwgv yaku';
$client_mail->SMTPSecure = 'tls';
$client_mail->Port = 587;

$client_mail->setFrom('support@technofra.com', 'Technofra');
$client_mail->addAddress($email);
$client_mail->isHTML(true);
$client_mail->Subject = 'Thank You for Your Enquiry – Technofra Team (' . $currentDateTime . ')';
$client_mail->Body = $client_htmlbody;

// Send Client Email
if (!$client_mail->send()) {
    header('Location: failed.php');
    exit;
}

header('Location: success.php');
