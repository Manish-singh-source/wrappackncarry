<?php
$title = "Profile - Admin Panel";
$pageName = "My Profile";
include("layouts/header.php");

$conn = new mysqli("localhost", "root", "", "wrappackncarry");
$admin = ['name' => '', 'email' => '', 'phone' => ''];
$message = '';
$success = false;

if (!$conn->connect_error) {
    $adminId = $_SESSION['admin_id'] ?? 0;
    $result = $conn->query("SELECT id, name, email, phone FROM users WHERE id = $adminId");
    if ($result && $result->num_rows > 0) {
        $admin = $result->fetch_assoc();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $adminId = $_SESSION['admin_id'] ?? 0;
    
    if ($_POST['action'] === 'update_profile') {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        
        if (empty($name) || empty($email)) {
            $message = 'Name and email are required';
        } else {
            $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?");
            $stmt->bind_param("sssi", $name, $email, $phone, $adminId);
            if ($stmt->execute()) {
                $_SESSION['admin_name'] = $name;
                $_SESSION['admin_email'] = $email;
                $message = 'Profile updated successfully!';
                $success = true;
                $admin['name'] = $name;
                $admin['email'] = $email;
                $admin['phone'] = $phone;
            } else {
                $message = 'Error updating profile';
            }
            $stmt->close();
        }
    }
    
    if ($_POST['action'] === 'change_password') {
        $current_password = $_POST['current_password'] ?? '';
        $new_password = $_POST['new_password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';
        
        if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
            $message = 'All password fields are required';
        } elseif ($new_password !== $confirm_password) {
            $message = 'New passwords do not match';
        } elseif (strlen($new_password) < 6) {
            $message = 'Password must be at least 6 characters';
        } else {
            $result = $conn->query("SELECT password FROM users WHERE id = $adminId");
            if ($result && $result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($current_password, $user['password'])) {
                    $hashed = password_hash($new_password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
                    $stmt->bind_param("si", $hashed, $adminId);
                    if ($stmt->execute()) {
                        $message = 'Password changed successfully!';
                        $success = true;
                    } else {
                        $message = 'Error changing password';
                    }
                    $stmt->close();
                } else {
                    $message = 'Current password is incorrect';
                }
            }
        }
    }
    $conn->close();
}
?>

<!-- ============================================================== -->
<!-- Start Main Content -->
<!-- ============================================================== -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Profile Information</h5>
            </div>
            <div class="card-body">
                <?php if (!empty($message)): ?>
                    <div class="alert alert-<?php echo $success ? 'success' : 'danger'; ?>">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <input type="hidden" name="action" value="update_profile">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($admin['name']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($admin['email']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" value="<?php echo htmlspecialchars($admin['phone'] ?? ''); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Change Password</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <input type="hidden" name="action" value="change_password">
                    <div class="mb-3">
                        <label class="form-label">Current Password</label>
                        <input type="password" class="form-control" name="current_password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" name="new_password" required minlength="6">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" name="confirm_password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- container -->

<?php include('layouts/footer.php'); ?>