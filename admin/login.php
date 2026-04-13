<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Wrap Pack N Carry </title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/wrap-logo.png" />
    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
    <script src="demo.js"></script>

    <!-- Vendor css -->
    <link href="assets/css/vendors.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
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
                            <a href="index.html" class="logo-dark">
                                <img src="assets/images/wrap-logo.png" alt="dark logo" />
                            </a>
                            <a href="index.html" class="logo-light">
                                <img src="assets/images/logo.png" alt="logo" />
                            </a>
                            <h4 class="fw-bold text-dark mt-3">Great to see you here 👋</h4>
                            <p class="text-muted w-lg-75 mx-auto">Let’s get you signed in. Enter your email and password to continue.</p>
                        </div>
                        <p class="text-center text-muted my-3 auth-line">
                            <span> Continue with Email </span>
                        </p>
                        <form action="https://coderthemes.com/paces/bootstrap/index.html">
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">
                                    Email address
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="userEmail" placeholder="you&#64;example.com" required />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="userPassword" class="form-label">
                                    Password
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="userPassword" placeholder="••••••••" required />
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input form-check-input-light fs-14" type="checkbox" checked id="rememberMe" />
                                    <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                                </div>
                                <a href="forgot-password.php" class="text-decoration-underline link-offset-3 text-muted">Forgot Password?</a>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Sign In</button>
                            </div>
                        </form>
                    </div>

                    <p class="text-center text-muted mt-4 mb-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Wrap Pack N Carry — by
                        <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12"><a href="https://technofra.com/"> Technofra </a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- end auth-fluid-->
    <!-- Vendor js -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>