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