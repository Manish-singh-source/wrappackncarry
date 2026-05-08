<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($subject) && !empty($message)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wrappackncarry";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO contact_us (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);

        if ($stmt->execute()) {
            // Load PHPMailer
            require(__DIR__ . '/PHPMailer/src/PHPMailer.php');
            require(__DIR__ . '/PHPMailer/src/SMTP.php');

            $currentDateTime = date('Y-m-d H:i:s');

            // Admin email content
            $htmlbody = '
            <html>
            <head>
                <title>Contact Us - Form Enquiry</title>
            </head>
            <body>
                <table>
                    <tbody>
                        <tr>
                            <td valign="middle" align="center">
                                <table width="630" cellspacing="0" cellpadding="0" border="1">
                                    <tbody>
                                        <tr>
                                            <td valign="middle" align="center">
                                                <table width="630" cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td valign="middle" align="middle" style="background-color:#000000;">
                                                                <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td valign="middle" align="left" style="width:75%">
                                                                                <img style="display: inline-block; position: relative; max-width: 100%" src="https://digikcon.com/wrappackncarry/images/wrap-logo.png" width="250px" height="75px" border="0">
                                                                            </td>
                                                                            <td valign="middle" align="left"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="middle" align="center">
                                                                <table width="620" cellspacing="20" cellpadding="0" border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td valign="middle" align="center">
                                                                                <font style="font-size: 13px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                    <b>Client Has Submitted Following Data Through Our Online Contact Form</b>
                                                                                </font>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="middle" align="center">
                                                                <table width="580" cellspacing="5" cellpadding="0" border="0" bgcolor="#DCECF5">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td valign="middle" align="center">
                                                                                <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    <strong>Name :</strong>
                                                                                                </font>
                                                                                            </td>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    ' . htmlspecialchars($name) . '
                                                                                                </font>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    <strong>Phone :</strong>
                                                                                                </font>
                                                                                            </td>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    ' . htmlspecialchars($phone) . '
                                                                                                </font>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    <strong>Email :</strong>
                                                                                                </font>
                                                                                            </td>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    ' . htmlspecialchars($email) . '
                                                                                                </font>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    <strong>Subject :</strong>
                                                                                                </font>
                                                                                            </td>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    ' . htmlspecialchars($subject) . '
                                                                                                </font>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td valign="top" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    <strong>Message :</strong>
                                                                                                </font>
                                                                                            </td>
                                                                                            <td valign="middle" align="left">
                                                                                                <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                    ' . htmlspecialchars($message) . '
                                                                                                </font>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </body>
            </html>';

            // Send email to admin
            $mail = new PHPMailer\PHPMailer\PHPMailer();
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
            $mail->Subject = 'Received an inquiry from the WrapPackNCarry website contact form (' . $currentDateTime . ')';
            $mail->Body = $htmlbody;
            $mail->send();

            // Send thank-you email to client
            $clientName = htmlspecialchars($name);
            $client_htmlbody = '
            <html>
                <head>
                    <title>Thank You for Contacting Us</title>
                </head>
                <body>
                    <table>
                        <tbody>
                            <tr>
                                <td valign="middle" align="center">
                                    <table width="630" cellspacing="0" cellpadding="0" border="1">
                                        <tbody>
                                            <tr>
                                                <td valign="middle" align="center">
                                                    <table width="630" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td valign="middle" align="middle" style="background-color:#000000;">
                                                                    <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign="middle" align="left" style="width:75%">
                                                                                    <img style="display: inline-block; position: relative; max-width: 100%" src="https://digikcon.com/wrappackncarry/images/wrap-logo.png" width="250px" height="75px" border="0">
                                                                                </td>
                                                                                <td valign="middle" align="left"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="middle" align="center">
                                                                    <table width="620" cellspacing="20" cellpadding="0" border="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign="middle" align="center">
                                                                                    <font style="font-size: 13px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                        <b>Hi ' . $clientName . ',</b><br /><br />
                                                                                        Thank you for contacting WrapPackNCarry! We have received your inquiry and our team will get back to you shortly.<br /><br />
                                                                                        Best regards,<br />
                                                                                        Team WrapPackNCarry<br />
                                                                                        <span>Email: <a href="mailto:info@wrappackncarry.com">info@wrappackncarry.com</a></span><br />
                                                                                    </font>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </body>
            </html>';
            

            $client_mail = new PHPMailer\PHPMailer\PHPMailer();
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
            $client_mail->Subject = 'Thank You for Your Enquiry - WrapPackNCarry Team (' . $currentDateTime . ')';
            $client_mail->Body = $client_htmlbody;
            $client_mail->send();

            header("Location: contact-us.php?success=1");
            exit();
        }
        
        $stmt->close();
        $conn->close();
    }
}

header("Location: contact-us.php");
exit();
?>