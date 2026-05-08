<?php
date_default_timezone_set('Asia/Kolkata');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $product = $_POST['product'] ?? '';
    $format = $_POST['format'] ?? '';
    $variant = $_POST['variant'] ?? '';
    $size = $_POST['size'] ?? '';
    $quantity = $_POST['quantity'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate Google reCAPTCHA
    $recaptcha_secret = '6Lez9N0sAAAAAKLIka8ofI8b2PIZ3bXu-wnr64D4';
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
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
        echo json_encode(['success' => false, 'message' => 'reCAPTCHA verification failed. Please try again.']);
        exit;
    }

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($product) && !empty($format)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wrappackncarry";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            echo json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]);
            exit;
        }

        $stmt = $conn->prepare("INSERT INTO enquiries (name, phone, email, product, format, variant, size, quantity, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $name, $phone, $email, $product, $format, $variant, $size, $quantity, $message);

        if ($stmt->execute()) {
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
                    <title>New Enquiry Form Submission</title>
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
                                                New Enquiry Form Submission
                                            </h1>
                                            <p class="text">
                                                Client has submitted the following details through the website enquiry form.
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
                                                        Product
                                                    </td>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="value">
                                                        ' . htmlspecialchars($product) . '
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="label">
                                                        Format
                                                    </td>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="value">
                                                        ' . (!empty($format) ? htmlspecialchars($format) : '-') . '
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="label">
                                                        Variant
                                                    </td>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="value">
                                                        ' . (!empty($variant) ? htmlspecialchars($variant) : '-') . '
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="label">
                                                        Size
                                                    </td>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="value">
                                                        ' . (!empty($size) ? htmlspecialchars($size) : '-') . '
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="label">
                                                        Quantity
                                                    </td>
                                                    <td
                                                        style="
                                                            padding:18px 25px;
                                                            border-bottom:1px solid rgba(65,67,27,0.1);
                                                        "
                                                        class="value">
                                                        ' . (!empty($quantity) ? htmlspecialchars($quantity) : '-') . '
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
            $mail->Subject = 'Received an enquiry from the WrapPackNCarry website enquiry form (' . $currentDateTime . ')';
            $mail->Body = $htmlbody;
            $mail->send();

            echo json_encode(['success' => true, 'message' => 'Thank you! Your enquiry has been submitted successfully. We will contact you soon.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
        }
         
        $stmt->close();
        $conn->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
    }
} else {
    header("Location: index.php");
    exit();
}
?>