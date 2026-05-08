<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: index.php");
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = "Please enter email and password";
    } else {
        $servername = "localhost";
        $username = "root";
        $pwd = "";
        $dbname = "wrappackncarry";
        
        $conn = new mysqli($servername, $username, $pwd, $dbname);
        
        if ($conn->connect_error) {
            $error = "Database connection failed";
        } else {
            $stmt = $conn->prepare("SELECT id, name, email, password FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['admin_logged_in'] = true;
                    $_SESSION['admin_id'] = $user['id'];
                    $_SESSION['admin_name'] = $user['name'];
                    $_SESSION['admin_email'] = $user['email'];
                    header("Location: index.php");
                    exit();
                } else {
                    $error = "Invalid email or password";
                }
            } else {
                $error = "Invalid email or password";
            }
            $stmt->close();
            $conn->close();
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Wrap Pack N Carry </title>

    <link rel="shortcut icon" href="assets/images/wrap-logo-2.png" />
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
                            <h4 class="fw-bold text-dark mt-3">Great to see you here 👋</h4>
                            <p class="text-muted w-lg-75 mx-auto">Enter your email and password to continue.</p>
                        </div>
                        <p class="text-center text-muted my-3 auth-line">
                            <span> Continue with Email </span>
                        </p>
                        
                        <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">
                                    Email address
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="userEmail" name="email" placeholder="you@example.com" required autocomplete="false"/>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="userPassword" class="form-label">
                                    Password
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="userPassword" name="password" placeholder="••••••••" required autocomplete="false"/>
                                </div>
                            </div>

                            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input form-check-input-light fs-14" type="checkbox" checked id="rememberMe" />
                                    <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                                </div>
                                <a href="forgot-password.php" class="text-decoration-underline link-offset-3 text-muted">Forgot Password?</a>
                            </div> -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Login</button>
                            </div>
                        </form>
                    </div>

                    <!-- <p class="text-center text-muted mt-4 mb-0">
                        Don't have an account? <a href="signup.php" class="text-decoration-underline">Create one</a>
                    </p> -->
                    <p class="text-center text-muted mt-3 mb-0">
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