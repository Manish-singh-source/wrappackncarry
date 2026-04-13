<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $product = $_POST['product'] ?? '';
    $format = $_POST['format'] ?? '';
    $quantity = $_POST['quantity'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($product) && !empty($format)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wrappackncarry";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO enquiries (name, phone, email, product, format, quantity, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $phone, $email, $product, $format, $quantity, $message);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Thank you! Your enquiry has been submitted successfully. We will contact you soon.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again.']);
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