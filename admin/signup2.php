<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: index.php");
    exit();
}

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    if (empty($name) || empty($email) || empty($password)) {
        $error = "All fields are required";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters";
    } else {
        $servername = "localhost";
        $username = "root";
        $pwd = "";
        $dbname = "wrappackncarry";
        
        $conn = new mysqli($servername, $username, $pwd, $dbname);
        
        if ($conn->connect_error) {
            $error = "Database connection failed";
        } else {
            $checkStmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
            $checkStmt->bind_param("s", $email);
            $checkStmt->execute();
            $checkResult = $checkStmt->get_result();
            
            if ($checkResult->num_rows > 0) {
                $error = "Email already registered";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $insertStmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                $insertStmt->bind_param("sss", $name, $email, $hashedPassword);
                
                if ($insertStmt->execute()) {
                    $success = "Admin created successfully! You can now login.";
                } else {
                    $error = "Error creating user";
                }
                $insertStmt->close();
            }
            $checkStmt->close();
            $conn->close();
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Signup | Wrap Pack N Carry </title>

    <link rel="shortcut icon" href="assets/images/wrap-logo.png" />
    <script src="assets/js/config.js"></script>
    <script src="demo.js"></script>

    <link href="assets/css/vendors.min.css" rel="stylesheet" type="text/css" />

    <link id="app-style" href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <style>
        .auth-brand .logo-dark img,
        .auth-brand .logo-light img {
            height: 80px;
        }
    </style>

</head>

<body>

    <div class="auth-box overflow-hidden align-items-center d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-md-6 col-sm-8">
                    <div class="card p-4">
                        <div class="auth-brand text-center mb-2">
                            <a href="index.php" class="logo-dark">
                                <img src="assets/images/wrap-logo.png" alt="dark logo" />
                            </a>
                            <a href="index.php" class="logo-light">
                                <img src="assets/images/logo.png" alt="logo" />
                            </a>
                            <h4 class="fw-bold text-dark mt-3">Create Admin Account 👋</h4>
                            <p class="text-muted w-lg-75 mx-auto">Enter your details to create an admin account.</p>
                        </div>
                        
                        <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        
                        <?php if (!empty($success)): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                        <?php endif; ?>
                        
                        <p class="text-center text-muted my-3 auth-line">
                            <span> Signup Details </span>
                        </p>
                        
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="userName" class="form-label">
                                    Full Name
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="userName" name="name" placeholder="Enter your name" required />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="userEmail" class="form-label">
                                    Email address
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="userEmail" name="email" placeholder="you@example.com" required />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="userPassword" class="form-label">
                                    Password
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="userPassword" name="password" placeholder="••••••••" required />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">
                                    Confirm Password
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="••••••••" required />
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Create Account</button>
                            </div>
                        </form>
                        
                        <p class="text-center text-muted mt-4 mb-0">
                            Already have an account? <a href="login.php" class="text-decoration-underline">Login here</a>
                        </p>
                    </div>

                    <p class="text-center text-muted mt-4 mb-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Wrap Pack N Carry —
                        <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12"><a href="https://technofra.com/"> Technofra </a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendors.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>