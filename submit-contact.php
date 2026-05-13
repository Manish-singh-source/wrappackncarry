<?php
date_default_timezone_set('Asia/Kolkata');
require_once __DIR__ . '/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($subject) && !empty($message)) {
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $stmt = $conn->prepare("INSERT INTO contact_us (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);

        if ($stmt->execute()) {
            /*
            // =====================================================
            // EMAIL SENDING CODE - DISABLED (Uncomment to enable)
            // =====================================================
            
            // Load PHPMailer
            require(__DIR__ . '/PHPMailer/src/PHPMailer.php');
            require(__DIR__ . '/PHPMailer/src/SMTP.php');

            $currentDateTime = date('Y-m-d H:i:s');

            // Admin email content
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
                                                        ' . htmlspecialchars($name) . '
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
                                                        ' . htmlspecialchars($phone) . '
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
                                                        ' . htmlspecialchars($email) . '
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
                                                        ' . htmlspecialchars($subject) . '
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
                                                        ' . htmlspecialchars($message) . '
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

            // Send email to admin
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'manish@technofra.com';
            $mail->Password = 'kwsx egye tejs iycf';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('manish@technofra.com', 'Wrap Pack N Carry');
            $mail->addAddress('manish@technofra.com');
            $mail->isHTML(true);
            $mail->Subject = 'Received an inquiry from the WrapPackNCarry website contact form (' . $currentDateTime . ')';
            $mail->Body = $htmlbody;
            $mail->send();

            // Send thank-you email to client
            $clientName = htmlspecialchars($name);
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
                                                Hi <strong>' . $clientName . '</strong>,
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


            $client_mail = new PHPMailer\PHPMailer\PHPMailer();
            $client_mail->IsSMTP();
            $client_mail->Host = 'smtp.gmail.com';
            $client_mail->SMTPAuth = true;
            $client_mail->Username = 'manish@technofra.com';
            $client_mail->Password = 'kwsx egye tejs iycf';
            $client_mail->SMTPSecure = 'tls';
            $client_mail->Port = 587;
            $client_mail->setFrom('manish@technofra.com', 'Technofra');
            $client_mail->addAddress($email);
            $client_mail->isHTML(true);
            $client_mail->Subject = 'Thank You for Your Enquiry - WrapPackNCarry Team (' . $currentDateTime . ')';
            $client_mail->Body = $client_htmlbody;
            $client_mail->send();
            // =====================================================
            // END OF EMAIL SENDING CODE
            // =====================================================
            */

            header("Location: contact-us.php?success=1");
            exit();
        }

        $stmt->close();
        $conn->close();
    }
}

header("Location: contact-us.php");
exit();