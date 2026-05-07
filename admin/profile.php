<?php
$title = "Profile - Admin Panel";
$pageName = "My Profile";
include("layouts/header.php");

$conn = new mysqli("localhost", "root", "", "wrappackncarry");
$admin = ['name' => '', 'email' => ''];
$message = '';
$success = false;

if (!$conn->connect_error) {
    $adminId = $_SESSION['admin_id'] ?? 0;
    $result = $conn->query("SELECT id, name, email FROM users WHERE id = $adminId");
    if ($result && $result->num_rows > 0) {
        $admin = $result->fetch_assoc();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $adminId = $_SESSION['admin_id'] ?? 0;
    
    if ($_POST['action'] === 'update_profile') {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        
        if (empty($name) || empty($email)) {
            $message = 'Name and email are required';
        } else {
            $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, WHERE id = ?");
            $stmt->bind_param("sssi", $name, $email, $adminId);
            if ($stmt->execute()) {
                $_SESSION['admin_name'] = $name;
                $_SESSION['admin_email'] = $email;
                $message = 'Profile updated successfully!';
                $success = true;
                $admin['name'] = $name;
                $admin['email'] = $email;
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

<?php if (!empty($message)): ?>
<div class="row mb-3">
    <div class="col-12">
        <div class="alert alert-<?php echo $success ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
            <?php echo $message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="row">
    <!-- Left Column - Profile Information -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-primary-subtle2">
                <div class="d-flex align-items-center gap-2">
                    <i class="ti ti-user-circle text-success fs-20"></i>
                    <h5 class="mb-0">Profile Information</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <div class="avatar avatar-xl mx-auto mb-3">
                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-1">
                            <?php echo strtoupper(substr($admin['name'] ?? 'A', 0, 1)); ?>
                        </span>
                    </div>
                    <h4 class="mb-1"><?php echo htmlspecialchars($admin['name']); ?></h4>
                    <span class="badge bg-primary-subtle text-primary">Admin</span>
                </div>
                
                <form method="POST" action="">
                    <input type="hidden" name="action" value="update_profile">
                    <div class="mb-3">
                        <label class="form-label">Full Name <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ti ti-user"></i></span>
                            <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($admin['name']); ?>" required disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ti ti-mail"></i></span>
                            <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($admin['email']); ?>" required disabled>
                        </div>
                    </div>
                    <!-- <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i> Save Changes
                        </button>
                    </div> -->
                </form>
            </div>
        </div>
    </div>

    <!-- Right Column - Change Password -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-success-subtle2">
                <div class="d-flex align-items-center gap-2">
                    <i class="ti ti-shield-lock text-success fs-20"></i>
                    <h5 class="mb-0">Change Password</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <div class="avatar avatar-xl mx-auto mb-3 bg-success-subtle">
                        <span class="avatar-title bg-success-subtle text-success rounded-circle fs-1">
                            <i class="ti ti-lock"></i>
                        </span>
                    </div>
                    <h5 class="mb-1">Update Your Password</h5>
                    <p class="text-muted fs-13 mb-0">Ensure your account is using a strong password</p>
                </div>
                
                <form method="POST" action="">
                    <input type="hidden" name="action" value="change_password">
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ti ti-key"></i></span>
                            <input type="password" class="form-control" name="current_password" placeholder="Enter current password" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ti ti-key"></i></span>
                            <input type="password" class="form-control" name="new_password" placeholder="Enter new password" required minlength="6">
                        </div>
                        <span class="text-muted fs-11">Minimum 6 characters</span>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ti ti-key"></i></span>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm new password" required>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            <i class="ti ti-shield-check me-1"></i> Change Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end row -->
</div>
<!-- container -->  

<?php include('layouts/footer.php'); ?>